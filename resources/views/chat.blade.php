<!DOCTYPE html>
<html lang="en" class="bg-gray-100">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AhmadAI Chat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen font-sans text-gray-800">

  <div class="w-full max-w-2xl h-[90vh] bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col overflow-hidden">

    <!-- Header -->
    <header class="px-6 py-4 bg-white border-b border-gray-200 flex items-center justify-between">
      <h1 class="text-lg font-semibold text-gray-700 tracking-wide">Ahmad<span class="text-indigo-500">AI</span> Chat</h1>
      <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-700 font-medium">Online</span>
    </header>

    <!-- Chat Area -->
    <div id="chat-window" class="flex-1 overflow-y-auto px-6 py-4 space-y-4 bg-gray-50">

      <!-- Message: AI -->
      <div class="flex items-start">
        <div class="bg-gray-100 text-gray-700 px-4 py-3 rounded-xl max-w-sm shadow-sm">
          Hello! How can I assist you today?
        </div>
      </div>

      <!-- Message: User -->
      <div class="flex justify-end">
        <div class="bg-indigo-500 text-white px-4 py-3 rounded-xl max-w-sm shadow-sm">
          Help me write a Laravel validation rule.
        </div>
      </div>

      <!-- Message: AI -->
      <div class="flex items-start">
        <div class="bg-gray-100 text-gray-700 px-4 py-3 rounded-xl max-w-sm shadow-sm">
          Sure! Here's an example using Laravel's `rules()` method...
        </div>
      </div>

    </div>

    <!-- Input Box -->
    <form id="chat-form" class="px-4 py-3 border-t bg-white flex items-center gap-3">
      <input
        type="text"
        id="messageInput"
        placeholder="Type your message..."
        class="flex-1 px-4 py-2 bg-gray-100 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400"
      />
      <button
        type="submit"
        class="bg-indigo-500 hover:bg-indigo-600 text-white px-5 py-2 text-sm font-medium rounded-full transition"
      >
        Send
      </button>
    </form>

  </div>

  <!-- Basic JS to simulate sending -->
  <script>
    const form = document.getElementById('chat-form');
    const chatWindow = document.getElementById('chat-window');
    const messageInput = document.getElementById('messageInput');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const msg = messageInput.value.trim();
      if (!msg) return;

      const bubble = document.createElement('div');
      bubble.className = "flex justify-end";
      bubble.innerHTML = `<div class="bg-indigo-500 text-white px-4 py-3 rounded-xl max-w-sm shadow-sm">${msg}</div>`;
      chatWindow.appendChild(bubble);

      messageInput.value = '';
      chatWindow.scrollTop = chatWindow.scrollHeight;
    });
  </script>

</body>
</html>
