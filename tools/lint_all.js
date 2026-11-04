const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

function getPhpFiles(dir) {
  let results = [];
  const list = fs.readdirSync(dir);
  list.forEach(file => {
    if (file === 'vendor' || file === 'node_modules' || file === '.git') return;
    const full = path.join(dir, file);
    const stat = fs.statSync(full);
    if (stat && stat.isDirectory()) {
      results = results.concat(getPhpFiles(full));
    } else if (file.endsWith('.php')) {
      results.push(full);
    }
  });
  return results;
}

const themeDir = path.resolve(__dirname, '..');
const files = getPhpFiles(themeDir);
let errors = 0;
files.forEach(f => {
  try {
    execSync(`php -l "${f}"`, { stdio: 'pipe' });
  } catch (e) {
    console.error('FAILED: ' + f);
    errors++;
  }
});

console.log(`Scanned ${files.length} PHP files. Total syntax errors: ${errors}`);
if (errors > 0) process.exit(1);
