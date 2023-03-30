
$(document).ready(function() {
    // Click handler for the dropdown button
    $("#dropdown_button").on("click", function(e) {
        // Prevent the default click behavior
        e.preventDefault();
        // Toggle the display of the search form
        $("#dropdown").toggle();
    });

    // Click handler for the document
    $(document).on("click", function(e) {
        // If the clicked element is not inside the dropdown or dropdown button,
        // hide the dropdown
        if (!$(e.target).closest("#dropdown_button, #dropdown").length) {
            $("#dropdown").hide();
        }
    });
});

// Shows and hides the live chat
let messages = [
    {
        sender: "Sterk Huis",
        message: "Welcome to our live chat. How may we assist you?"
    }
];

function showChatWidget() {
    document.getElementById("chat-widget").style.display = "block";
    document.getElementById("show-chat-widget").style.display = "none";
}

function hideChatWidget() {
    document.getElementById("chat-widget").style.display = "none";
    document.getElementById("show-chat-widget").style.display = "block";
}

function sendMessage() {
    let messageInput = document.getElementById("chat-widget-input");
    let message = messageInput.value;

    if (message !== "") {
        messages.push({
            sender: "Jij",
            message: message
        });

        messageInput.value = "";

        // Simulate response after 1 second
        setTimeout(function() {
            messages.push({
                sender: "Sterk Huis",
                message: "Thank you for your message."
            });
        }, 1000);
    }
}

function displayMessages() {
    let chatWidgetBody = document.getElementById("chat-widget-body");
    let chatWidgetHTML = "";

    messages.forEach(function(message) {
        chatWidgetHTML += `<p><strong>${message.sender}: </strong>${message.message}</p>`;
    });

    chatWidgetBody.innerHTML = chatWidgetHTML;

    // Scroll to the bottom of the chat widget
    chatWidgetBody.scrollTop = chatWidgetBody.scrollHeight;
}

setInterval(displayMessages, 100); // Update chat widget every 100ms

