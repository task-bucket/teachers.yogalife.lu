document.addEventListener("DOMContentLoaded", function() {
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Remove active state
      tabButtons.forEach(b => b.classList.remove("active"));
      tabContents.forEach(c => c.classList.remove("active"));

      // Add active state to clicked tab and content
      btn.classList.add("active");
      const tabId = btn.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
    const chatIconLink = document.querySelector('.chatbox-icon > a');
    const chatBox = document.querySelector('.chat-box');
    const chatIcon = document.querySelector('.chatbox-icon');
    const chatClose = document.querySelector('.chatbox-close');
    chatIconLink.addEventListener('click', function(e) {
        e.preventDefault(); // prevent default link behavior
        chatBox.classList.add('show');
        chatIcon.classList.add('hide');
    });
    chatClose.addEventListener('click', function(e) {
        e.preventDefault(); // prevent default link behavior
        chatBox.classList.remove('show');
        chatIcon.classList.remove('hide');
    });
});

document.addEventListener("DOMContentLoaded", () => {
  console.log("chat debug: DOM ready");

  const container = document.querySelector(".chatbox-body");
  const sendBtn = document.querySelector(".chatbox-bottom button");
  const inputField = document.querySelector(".chatbox-bottom input");

  if (!container || !sendBtn || !inputField) {
    console.error("chat debug: essential elements not found");
    return;
  }

  const buttons = document.querySelectorAll(".chat-options button");
  console.log("chat debug: buttons found =", buttons.length);

  const responses = {
    "What's available in electronics?": "You can browse phones, laptops, and accessories from trusted sellers near you.",
    "How do I know if a price is fair?": "Compare similar listings and check condition, brand, and demand before buying.",
    "Tell me about shipping options": "We offer standard, express, and local pickup options depending on the seller.",
    "Help me find furniture under €200": "You can filter search results by price and category to find great deals!",
  };

  function addCustomerReply(message) {
    const reply = document.createElement("div");
    reply.className = "customer-reply";
    reply.innerHTML = `
      <div class="icon"><img src='<?php echo $cdn_url; ?>/media/global/blank-male-image.png'></div>
      <div class="message"><p>${message}</p></div>
    `;
    container.appendChild(reply);
    container.scrollTop = container.scrollHeight;
    console.log("chat debug: customer-reply appended");
  }

  function addBotReply(message) {
    setTimeout(() => {
      const botReply = document.createElement("div");
      botReply.className = "bot-reply";
      const botText = responses[message] || `Sorry, I don’t have information on "${message}" yet.`;
      botReply.innerHTML = `
        <div class="chatbot-message">
          <div class="icon"><img src="${document.querySelector('.chatbox-icon img')?.src || ''}" alt="Bot"></div>
          <div class="message"><p>${botText}</p></div>
        </div>
      `;
      container.appendChild(botReply);
      container.scrollTop = container.scrollHeight;
      console.log("chat debug: bot-reply appended");
    }, 1000);
  }

  // ========== OPTION BUTTONS ==========
  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const text = (btn.textContent || btn.innerText || "").trim();
      addCustomerReply(text);
      addBotReply(text);
    });
  });

  // ========== INPUT SEND ==========
  function handleSend() {
    const text = inputField.value.trim();
    if (!text) return;
    console.log("chat debug: input send ->", text);
    addCustomerReply(text);
    addBotReply(text);
    inputField.value = "";
  }

  sendBtn.addEventListener("click", handleSend);
  inputField.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      handleSend();
    }
  });
});
