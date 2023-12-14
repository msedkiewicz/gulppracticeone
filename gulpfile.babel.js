// const { series } = require("gulp");

function defaultTask(cb) {
  // place code for your default task here
  console.log("It's working");
  cb();
}

function wowTask(cb) {
  console.log("Wow");
  cb();
}

exports.defaultTask = defaultTask;
exports.wowTask = wowTask;
// exports.default = series(defaultTask, wowTask);
