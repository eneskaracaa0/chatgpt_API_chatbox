const input = document.getElementById("input-msg");
const btn = document.getElementById("send-btn");
const chatbox = document.getElementById("chat-box");

btn.addEventListener("click", () => {
  if (input.value == "") {
    alert("Lütfen Bir şeyler Yazınız!");
  } else {
    const value = input.value;
    const html = `<div class="media-chat media-chat-reverse">
        <p>
          <b>Human:</b> ${value}
        </p>
      </div>`;
    chatbox.insertAdjacentHTML("beforeend", html);
    input.value = "";

    $.ajax({
      type: "POST",
      url: "chat.api.php",
      data: { prompt: value },
      dataType: "json",
      success: function (response) {
        const data = JSON.parse(response);
        chatbox.insertAdjacentHTML(
          "beforeend",
          `
                    <div class="media-chat">
                        <p>
                            <b>AI:</b>
                            ` +
            data.choices[0].text +
            `
                        </p>
                    </div>
                `
        );
      },
      error: function (e) {
        console.log(e);
      },
    });
  }
});

setInterval(() => {
  chatbox.scrollTop = chatbox.scrollHeight;
}, 300);
