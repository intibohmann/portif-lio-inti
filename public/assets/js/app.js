import {createServer} from "node:http";

const server = createServer((req, res) => {console.log("Request received")});

server.listen(3000, () => {
    console.log("Server is running on http://localhost:3000");
});