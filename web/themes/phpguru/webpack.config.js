const localDomain = "http://phpguru-headfirst.local/admin.php";
const path = require("path");
const root = path.resolve(path.join(__dirname, "..", "..", ".."));
const src = path.resolve(__dirname, "src");
const dist = path.resolve(__dirname, "dist");
const webpack = require("webpack");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");

const entry = {
  admin: path.resolve(src, "admin.js"),
  web: path.resolve(src, "web.js"),
};

const getRules = function (mode) {
  const rules = [
    // js, jsx
    {
      test: /\.(js|jsx)$/,
      exclude: /node_module/,
      use: ["babel-loader"],
    },
    // css,scss
    {
      test: /\.(css|scss)$/,
      use: [
        // fallback to style-loader in development
        MiniCssExtractPlugin.loader,
        //mode !== "production" ? "style-loader" : MiniCssExtractPlugin.loader,
        "css-loader",
        "postcss-loader",
        "sass-loader",
      ],
    },
    // images
    {
      test: /\.(png|svg|jpe?g|gif)$/i,
      use: [
        {
          loader: "file-loader",
          options: {
            publicPath: "", //assets
            name: "[path][name].[ext]?[hash]",
            context: "src",
            outputPath: "",
            useRelativePath: false,
          },
        },
      ],
    },
    // fonts
    {
      test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
      use: [
        {
          loader: "file-loader",
          options: {
            name: "[name].[ext]",
            outputPath: "fonts/",
          },
        },
      ],
    },
  ];
  return rules;
};

const getPlugins = function (mode) {
  let plugins = [
    new webpack.ProgressPlugin(),
    new MiniCssExtractPlugin({
      // Options similar to the same options in webpackOptions.output
      // both options are optional
      filename: "[name].css",
      chunkFilename: "[name].css",
      //mode !== "production" ? "assets/css/[name]_[hash].css" : "style.css",
      // chunkFilename: "phpguru.css",
      //mode !== "production" ? "assets/css/[id]_[hash].css" : "style.css",
    }),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
    }),
    new CopyWebpackPlugin({
      patterns: [{ from: src + "/assets", to: dist + "/assets" }],
    }),
    new BrowserSyncPlugin(
      {
        proxy: localDomain,
        files: [dist + "/*.css", root + "/*.php"],
        injectCss: true,
      },
      { reload: false }
    ),
  ];
  if (mode === "production") {
    plugins.unshift(new CleanWebpackPlugin());
  }
  return plugins;
};

let config = {
  entry: entry,
  output: {
    filename: "[name].js",
    path: dist,
    publicPath: "",
  },
  devtool: "inline-source-map",
  devServer: {
    port: 8081,
    contentBase: dist,
    hot: true,
  },
  module: {
    rules: [],
  },
  resolve: {
    extensions: ["*", ".js", ".jsx"],
  },
  plugins: [],
};

module.exports = (env, argv) => {
  if (argv.mode === "development") {
    config.devtool = "source-map";
    config.output = {
      filename: "[name].js",
      path: dist,
    };
  }

  if (argv.mode === "production") {
    config.output = {
      filename: "[name].min.js",
      path: dist,
    };
  }

  config.module.rules = getRules(argv.mode);
  config.plugins = getPlugins(argv.mode);

  return config;
};
