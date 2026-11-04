const http = require('http');

const endpoints = [
  'http://localhost/moha/',
  'http://localhost/moha/si/',
  'http://localhost/moha/ta/',
  'http://localhost/moha/en/'
];

async function checkUrl(url) {
  return new Promise((resolve) => {
    http.get(url, (res) => {
      let data = '';
      res.on('data', chunk => data += chunk);
      res.on('end', () => {
        const hasTailwind = data.includes('tailwind.css');
        const hasSkipLink = data.includes('skip-link') || data.includes('main-content');
        resolve({
          url,
          status: res.statusCode,
          length: data.length,
          hasTailwind,
          hasSkipLink
        });
      });
    }).on('error', (err) => {
      resolve({ url, status: 'ERROR', error: err.message });
    });
  });
}

(async () => {
  for (const ep of endpoints) {
    const res = await checkUrl(ep);
    console.log(`[${res.status}] ${res.url} | length: ${res.length || 0} bytes | tailwind: ${res.hasTailwind} | skipLink: ${res.hasSkipLink}`);
  }
})();
