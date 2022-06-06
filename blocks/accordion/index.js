import { registerBlockType } from '@wordpress/blocks';

import edit from './edit';
import save from './save';
import name, * as settings from './block.json';

import './style.scss';

registerBlockType( name, {
	...settings,
	edit,
	save,
} );
