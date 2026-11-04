const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const themeDir = path.resolve(__dirname, '..');

const targetFiles = [
  'attachment.php',
  'category.php',
  'comments.php',
  'tag.php',
  'template-parts/content-archive.php',
  'template-parts/content-single.php',
  'template-parts/footer-about.php',
  'template-parts/footer-copyright.php',
  'template-parts/footer-find-us.php',
  'inc/helpers.php'
];

targetFiles.forEach(rel => {
  const file = path.join(themeDir, rel);
  if (!fs.existsSync(file)) return;

  let content = fs.readFileSync(file, 'utf8');
  let original = content;

  // Upgrade gray-400 / slate-400 / zinc-400
  content = content.replace(/placeholder:text-gray-400/g, 'placeholder:text-gray-500');
  content = content.replace(/placeholder:text-slate-400/g, 'placeholder:text-slate-500');
  content = content.replace(/\btext-gray-400\b/g, 'text-gray-600');
  content = content.replace(/\btext-slate-400\b/g, 'text-slate-600');
  content = content.replace(/\btext-zinc-400\b/g, 'text-zinc-600');

  // Add loading="lazy" decoding="async" to <img> in content-archive and attachment
  if (rel.includes('content-') || rel.includes('attachment')) {
    content = content.replace(/<img(?![^>]*\bloading=)([^>]*?)>/gi, (match, attrs) => {
      return `<img loading="lazy" decoding="async"${attrs}>`;
    });
  }

  // Ensure button types
  content = content.replace(/<button(?![^>]*\btype=)([^>]*?)>/gi, (match, attrs) => {
    return `<button type="button"${attrs}>`;
  });

  if (content !== original) {
    fs.writeFileSync(file, content, 'utf8');
    try {
      execSync(`php -l "${file}"`, { stdio: 'pipe' });
      console.log(`[OK] Upgraded: ${rel}`);
    } catch (err) {
      console.error(`[FAIL] Syntax error in ${rel}, reverting!`);
      fs.writeFileSync(file, original, 'utf8');
    }
  }
});
