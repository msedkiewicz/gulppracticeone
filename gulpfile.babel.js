// const { series } = require("gulp");
// const { yargs, argv } = require("yargs");

const yargs = require("yargs/yargs");
const { hideBin } = require("yargs/helpers");
const argv = yargs(hideBin(process.argv)).argv;

const PRODUCTION = yargs.argv.prod;

function defaultTask(cb) {
  // place code for your default task here
  console.log(PRODUCTION);
  cb();
}

function wowTask(cb) {
  console.log("Wow");
  cb();
}

exports.defaultTask = defaultTask;
exports.wowTask = wowTask;
// exports.default = series(defaultTask, wowTask);
