const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require( 'path' );

function resolve( ...paths ) {
    return path.resolve( __dirname, ...paths );
}

module.exports = {
    ...defaultConfig,
    entry: {
        admin: './src/admin.js',
    },
    output: {
        filename: '[name].js',
        path: resolve( 'assets' ),
        chunkFilename: 'chunks/[chunkhash].js',
        chunkLoadingGlobal: 'webotWebpack',
    },
}