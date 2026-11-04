const fs = require('fs');
const path = require('path');

const scssDir = path.resolve(__dirname, '../assets/scss');
const files = fs.readdirSync(scssDir).filter(f => f.endsWith('.scss'));

files.forEach(f => {
  const content = fs.readFileSync(path.join(scssDir, f), 'utf8');
  // Look for hardcoded hex colors that might not be using SCSS variables
  const hexColors = content.match(/#[0-9a-fA-F]{3,8}\b/g) || [];
  // Look for legacy functions
  const legacyFns = content.match(/\b(darken|lighten|saturate|desaturate|adjust-hue)\(/g) || [];
  
  if (legacyFns.length > 0) {
    console.log(`${f} has legacy fns: ${legacyFns.join(', ')}`);
  }
});

console.log('SCSS Legacy Function audit completed.');
