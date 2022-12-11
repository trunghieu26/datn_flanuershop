const { Socket } = require('socket.io')

var io = require('socket.io')(6000)
console.log('Connected on port 6000')
io.on('error', function (socket) {
    console.log('error')
})
io.on('connection', function(socket) {
    console.log('Someone just connected'+socket.id)
})

var Redis = require('ioredis')
var redis = new Redis(1000);