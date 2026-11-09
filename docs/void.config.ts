import { defineConfig } from 'void/config';

export default defineConfig({
	cloudflare: {
		compatibility_date: '2026-11-01',
		name: 'php-imgproxy',
		routes: [{ custom_domain: true, pattern: 'php-imgproxy.somehow-digital.dev' }],
	},
});
