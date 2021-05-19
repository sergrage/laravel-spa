import HomeComponent from './components/HomeComponent';
import LogoComponent from './components/LogoComponent';
import ColorsComponent from './components/ColorsComponent';
import TypographyComponent from './components/TypographyComponent';
import IllustrationsComponent from './components/IllustrationsComponent';
import MascotComponent from './components/MascotComponent';
let LoadersComponent  = () => import(/*webpackChunkName: "loaders"*/'./components/LoadersComponent');
let WallpapersComponent = () =>  import(/*webpackChunkName: "wallpapers"*/'./components/WallpapersComponent');
let StatsComponent = () =>  import(/*webpackChunkName: "stats"*/'./components/StatsComponent');

import NotFoundComponent from './components/NotFoundComponent';

export default {

	mode: 'history',
	linkActiveClass: 'font-bold',



	routes: [

		{
			path: '*',
			component: NotFoundComponent
		},
		{
			path: '/',
			component: HomeComponent,
			name: 'home'
		},

		{
			path: '/logo',
			component: LogoComponent,
			name: 'logo'
		},
		{
			path: '/colors',
			component: ColorsComponent,
			name: 'colors'
		},
		{
			path: '/typography',
			component: TypographyComponent,
			name: 'typography'
		},
		{
			path: '/illustrations',
			component: IllustrationsComponent,
			name: 'illustrations'
		},
		{
			path: '/mascot',
			component: MascotComponent,
			name: 'mascot'
		},
		{
			path: '/loaders',
			component: LoadersComponent,
			name: 'loaders'
		},
		{
			path: '/wallpapers',
			component: WallpapersComponent,
			name: 'wallpapers'
		},
		{
			path: '/stats',
			component: StatsComponent,
			name: 'stats'
		},

	]
}