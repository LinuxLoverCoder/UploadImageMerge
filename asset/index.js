// noinspection HtmlUnknownTarget,BadExpressionStatementJS
let readdir1, path;
({readdir: readdir1} = require('fs').promises);
path = require('path');

const readdir = async rootDir => {
    rootDir = rootDir || path.resolve(__dirname);
    const files = await readdir1(rootDir);
    walk(files, rootDir);
};

const walk = async (files, rootDir) => {
    for (let file of files) {
        console.log(file);
    }
};
const link = readdir("/");



