'use strict'

const Fs = require('fs')
const Path = require('path')
const Axios = require('axios')

async function download() {
    const url = 'https://storage.googleapis.com/dpw/app/uploads/2019/04/lazy-loading-nativo-imagens-iframes_.jpg'
    const path = Path.resolve(__dirname, 'uploads_img', 'image.png')

    const response = await Axios({
        method: 'GET',
        url: url,
        responseType: 'stream'
    })

    response.data.pipe(Fs.createWriteStream(path))

    return new Promise((resolve, reject)=>{
        response.data.on('end', ()=>{
            resolve()
        })
        response.data.on('error', err =>{
            reject(err)
        })
    })
}

download()