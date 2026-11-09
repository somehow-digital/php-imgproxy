import { unified } from '@astrojs/markdown-remark';
import starlight from '@astrojs/starlight';
import { defineConfig } from 'astro/config';

export default defineConfig({
	base: '/',
	// The default processor leaves the code blocks of Markdown pages without their highlighting styles.
	markdown: { processor: unified() },
	integrations: [
		starlight({
			components: {
				ThemeProvider: './src/components/theme-provider.astro',
				ThemeSelect: './src/components/theme-select.astro',
			},
			customCss: ['./src/styles/custom.css'],
			// Do not set `themes`: a custom theme list also breaks the highlighting of Markdown pages.
			expressiveCode: {
				styleOverrides: {
					borderColor: '#2a2a2a',
					borderRadius: '0.125rem',
					codeBackground: '#141414',
				},
			},
			editLink: {
				baseUrl: 'https://github.com/somehow-digital/php-imgproxy/edit/main/docs/',
			},
			sidebar: [
				{
					label: 'Guide',
					items: [
						'guide/getting-started',
						'guide/concepts',
						'guide/building-urls',
						'guide/pipelines',
						'guide/masking',
						'guide/signing',
						'guide/options',
						'guide/pro',
						'guide/extending',
					],
				},
				{
					label: 'Recipes',
					items: [
						{ label: 'Overview', slug: 'recipes' },
						'recipes/thumbnails',
						'recipes/responsive-images',
						'recipes/format-conversion',
						'recipes/watermarks',
						'recipes/downloads',
						'recipes/strip-metadata',
						'recipes/secure-urls',
					],
				},
				{
					label: 'API',
					items: [
						'api/url',
						'api/maskers',
						'api/signer',
						'api/enums',
					],
				},
				{
					label: 'Options',
					items: [
						{ label: 'Overview', slug: 'api/options' },
						...['Sizing', 'Cropping', 'Effects', 'Output', 'Source', 'Watermark', 'Delivery'].map(label => ({
							collapsed: true,
							items: [{ autogenerate: { directory: `api/options/${label.toLowerCase()}` } }],
							label,
						})),
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
