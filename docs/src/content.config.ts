import { docsLoader } from '@astrojs/starlight/loaders';
import { docsSchema } from '@astrojs/starlight/schema';
import { defineCollection, z } from 'astro:content';

export const collections = {
	docs: defineCollection({
		loader: docsLoader(),
		schema: docsSchema({
			extend: z.object({
				option: z
					.object({
						alias: z.string().optional(),
						category: z.string(),
						class: z.string(),
						name: z.string(),
						pro: z.union([z.boolean(), z.literal('partial')]),
					})
					.optional(),
			}),
		}),
	}),
};
