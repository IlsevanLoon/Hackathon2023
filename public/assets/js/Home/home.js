
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
        message: "Welkom in de live chat, hier kunt u anoniem met een van onze getrainde medewerkers spreken."
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
        if (!messages.find(m => m.message === "Bedankt voor uw bericht, een mederwerker is onderweg om u verder te helpen met uw vraag!")) {
            setTimeout(function() {
                messages.push({
                    sender: "Sterk Huis",
                    message: "Bedankt voor uw bericht, een mederwerker is onderweg om u verder te helpen met uw vraag!"
                });

            }, 2000);
        }
    }
}

function displayMessages() {
    let chatWidgetBody = document.getElementById("chat-widget-body");
    let chatWidgetHTML = "";

    messages.forEach(function(message) {
        chatWidgetHTML += `<div class="message-bubble"><p><strong>${message.sender}: </strong>${message.message}</p></div>`;
    });

    chatWidgetBody.innerHTML = chatWidgetHTML;
}

setInterval(displayMessages, 100); // Update chat widget every 100ms
