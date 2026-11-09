export default {
	dictionaries: ['project'],
	dictionaryDefinitions: [
		{
			addWords: true,
			name: 'project',
			path: './dictionary.txt',
		},
	],
	ignoreRegExpList: ['/%[0-9A-F]{2}\\w*/g', '/\\b(?:fn|st|wmt):[\\w+/=-]+/g'],
	ignorePaths: ['.astro/', '.void/', 'dist/'],
	import: ['@somehow-digital/cspell-dictionary'],
	language: 'en',
	version: '0.2',
};
