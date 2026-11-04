const http = require('http');

const urls = [
  'http://localhost/moha/',
  'http://localhost/moha/si/',
  'http://localhost/moha/ta/',
  'http://localhost/moha/en/'
];

urls.forEach(url => {
  http.get(url, res => {
    let d = '';
    res.on('data', c => d += c);
    res.on('end', () => {
      const start = d.indexOf('National Emblem of Sri Lanka');
      console.log('=== URL:', url, '===');
      if (start !== -1) {
        console.log(d.substring(start - 40, start + 450).replace(/\s+/g, ' '));
      } else {
        console.log('Not found');
      }
    });
  });
});

