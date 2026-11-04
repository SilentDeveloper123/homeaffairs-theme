const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const themeDir = path.resolve(__dirname, '..');
const pageTemplatesDir = path.join(themeDir, 'page-templates');

// Helper to run PHP lint
function lintFile(filePath) {
  try {
    execSync(`php -l "${filePath}"`, { stdio: 'pipe' });
    return true;
  } catch (err) {
    console.error(`PHP Lint Error in ${filePath}:`, err.stderr ? err.stderr.toString() : err.message);
    return false;
  }
}

// Helper to modernize HTML attributes in template content
function modernizeContent(content, filename) {
  let updated = content;

  // 1. Remove stray PHP tag prefix if any
  if (updated.startsWith('PHP\r\n<?php') || updated.startsWith('PHP\n<?php')) {
    updated = updated.replace(/^PHP\r?\n/, '');
  }

  // 2. Add loading="lazy" decoding="async" to <img> tags lacking loading attribute
  updated = updated.replace(/<img(?![^>]*\bloading=)([^>]*?)>/gi, (match, attrs) => {
    return `<img loading="lazy" decoding="async"${attrs}>`;
  });

  // 3. Add type="button" to <button> lacking type attribute
  updated = updated.replace(/<button(?![^>]*\btype=)([^>]*?)>/gi, (match, attrs) => {
    return `<button type="button"${attrs}>`;
  });

  // 4. Upgrade low-contrast gray-400 and slate-400
  // Placeholders
  updated = updated.replace(/placeholder:text-gray-400/g, 'placeholder:text-gray-500');
  updated = updated.replace(/placeholder:text-slate-400/g, 'placeholder:text-slate-500');

  // Text colors
  updated = updated.replace(/\btext-gray-400\b/g, 'text-gray-600');
  updated = updated.replace(/\btext-slate-400\b/g, 'text-slate-600');
  updated = updated.replace(/\btext-zinc-400\b/g, 'text-zinc-600');

  // 5. Enhance focus rings on inputs/selects that have focus:outline-none but lack ring
  updated = updated.replace(/focus:outline-none(?![^"'>]*focus(-visible)?:ring)/g, 'focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary');

  // 6. Ensure main landmark and skip-link anchor
  if (!updated.includes('main-content') && !updated.includes('<main')) {
    // Find first outer container <div> after get_header() or page banner
    // Patterns like: <div class="max-w-7xl... or <div class="w-full bg-...
    const mainDivRegex = /(<div class="(?:max-w-7xl|w-full)[^"]*">)/;
    const match = updated.match(mainDivRegex);
    if (match) {
      const openTag = match[1];
      const newOpenTag = openTag.replace('<div', '<main id="main-content" role="main"');
      
      // We need to replace the opening tag and the corresponding closing </div>
      // We can replace the opening tag:
      updated = updated.replace(openTag, newOpenTag);

      // And find the matching closing tag. Usually right before <script>, <style>, modal, or <?php get_footer()
      // Let's find closing tags before <?php get_footer()
      // We look for </div> immediately preceding footer, script or modal
      const footerIndex = updated.lastIndexOf('<?php get_footer(); ?>');
      if (footerIndex !== -1) {
        // Find the last </div> before script/modal/footer
        const beforeFooter = updated.slice(0, footerIndex);
        const afterFooter = updated.slice(footerIndex);

        // Check if there is a script or modal before footer
        const scriptMatch = beforeFooter.search(/<script|<style|<div id="[^"]*modal/i);
        if (scriptMatch !== -1) {
          // Replace last </div> before scriptMatch
          const partBefore = beforeFooter.slice(0, scriptMatch);
          const partAfter = beforeFooter.slice(scriptMatch);
          const lastDivIndex = partBefore.lastIndexOf('</div>');
          if (lastDivIndex !== -1) {
            const newPartBefore = partBefore.slice(0, lastDivIndex) + '</main>' + partBefore.slice(lastDivIndex + 6);
            updated = newPartBefore + partAfter + afterFooter;
          }
        } else {
          // Replace last </div> before footer
          const lastDivIndex = beforeFooter.lastIndexOf('</div>');
          if (lastDivIndex !== -1) {
            const newBeforeFooter = beforeFooter.slice(0, lastDivIndex) + '</main>' + beforeFooter.slice(lastDivIndex + 6);
            updated = newBeforeFooter + afterFooter;
          }
        }
      }
    }
  }

  return updated;
}

// Run processing on all page templates
const files = fs.readdirSync(pageTemplatesDir).filter(f => f.endsWith('.php'));
let successCount = 0;
let modifiedCount = 0;

files.forEach(file => {
  const filePath = path.join(pageTemplatesDir, file);
  const original = fs.readFileSync(filePath, 'utf8');
  const transformed = modernizeContent(original, file);

  if (original !== transformed) {
    fs.writeFileSync(filePath, transformed, 'utf8');
    if (lintFile(filePath)) {
      console.log(`[OK] Modernized: ${file}`);
      modifiedCount++;
      successCount++;
    } else {
      console.error(`[FAIL] Syntax error in ${file}, reverting!`);
      fs.writeFileSync(filePath, original, 'utf8');
    }
  } else {
    successCount++;
  }
});

console.log(`\nCompleted page templates sweep: ${modifiedCount} files updated, ${successCount}/${files.length} valid.`);
