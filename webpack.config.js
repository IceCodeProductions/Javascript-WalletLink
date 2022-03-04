const webpack = require("webpack")
const path = require("path")
const {env} = process

module.exports = {
  target: "web",
  mode: "production",
  entry: "./src/app.js",
  resolve: {
    fallback: {
        buffer: require.resolve('buffer/'),
        fs : false,
        "stream": require.resolve("stream-browserify")
    },
  },
  output: {
    filename: "wallet-sdk-bundle.js",
    path: path.resolve(__dirname, "build")
  },
  plugins: [
    new webpack.DefinePlugin({
      "process.env": {
        NODE_ENV: JSON.stringify(env.NODE_ENV) || JSON.stringify('production'),
        WALLETLINK_URL: JSON.stringify(env.WALLETLINK_URL),
        WALLETLINK_VERSION: JSON.stringify(require("./package.json").version)
      },
    }),
    new webpack.ProvidePlugin({
      Buffer: ['buffer', 'Buffer'],
  }),
  ],
}
