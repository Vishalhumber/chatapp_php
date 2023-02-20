const messageList = document.getElementById("message-list");
const messageInput = document.getElementById("message-input");
const sendButton = document.getElementById("send-button");

sendButton.addEventListener("click", () => {
    const message = messageInput.value;
    if (message) {
        addMessageToChat(message);
        sendMessageToServer(message);
        messageInput.value = "";
    }
});

function addMessageToChat(message) {
    const li = document.createElement("li");
    li.innerText = message;
    messageList.appendChild(li);
}

function sendMessageToServer(message) {
    // send message to server using AJAX
    // update chat interface with new messages
}
