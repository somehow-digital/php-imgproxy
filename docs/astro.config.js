import starlight from '@astrojs/starlight';
import { defineConfig } from 'astro/config';

export default defineConfig({
	base: '/',
	integrations: [
		starlight({
			editLink: {
				baseUrl: 'https://github.com/somehow-digital/php-imgproxy/edit/main/docs/',
			},
			sidebar: [
				{
					label: 'Guide',
					items: [
						{ label: 'Getting Started', slug: 'guide/getting-started' },
						{ label: 'Building URLs', slug: 'guide/building-urls' },
						{ label: 'Pipelines', slug: 'guide/pipelines' },
						{ label: 'Source Masking', slug: 'guide/masking' },
						{ label: 'Signing', slug: 'guide/signing' },
						{ label: 'Options', slug: 'guide/options' },
					],
				},
				{
					label: 'API',
					items: [
						{ label: 'Url', slug: 'api/url' },
						{ label: 'Maskers', slug: 'api/maskers' },
						{ label: 'Signer', slug: 'api/signer' },
						{ label: 'Options', slug: 'api/options' },
						{ label: 'Enums', slug: 'api/enums' },
					],
				},
			],
			social: [
				{
					href: 'https://github.com/somehow-digital/php-imgproxy',
					icon: 'github',
					label: 'GitHub',
				},
			],
			title: 'imgproxy for PHP',
		}),
	],
	output: 'static',
	prefetch: {
		defaultStrategy: 'tap',
		prefetchAll: true,
	},
	site: 'https://php-imgproxy.somehow-digital.dev',
	trailingSlash: 'always',
});
