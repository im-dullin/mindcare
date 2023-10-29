<x-app-layout>
    <!-- component -->
    <div class="flex h-screen antialiased text-gray-800">
        <div class="flex flex-row h-full w-full overflow-x-hidden">
            <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
                <div class="flex flex-row items-center justify-center h-12 w-full">
                    <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-2 font-bold text-2xl">MindCare</div>
                </div>
                <div
                    class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg">
                    <div class="h-20 w-20 rounded-full border overflow-hidden">
                        <img src="https://avatars3.githubusercontent.com/u/2763884?s=128" alt="Avatar"
                            class="h-full w-full" />
                    </div>
                    <div class="text-sm font-semibold mt-2">Aminos Co.</div>
                    <div class="text-xs text-gray-500">Lead UI/UX Designer</div>
                    <div class="flex flex-row items-center mt-3">
                        <div class="flex flex-col justify-center h-4 w-8 bg-indigo-500 rounded-full">
                            <div class="h-3 w-3 bg-white rounded-full self-end mr-1"></div>
                        </div>
                        <div class="leading-none ml-1 text-xs">Active</div>
                    </div>
                </div>
                <div class="flex flex-col mt-8">
                    <div class="flex flex-row items-center justify-between text-xs">
                        <span class="font-bold">Active Conversations</span>
                        <button><span class="flex items-center justify-center bg-gray-300 h-6 w-6 rounded-full">+</span></button>
                    </div>
                    <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                                H
                            </div>
                            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
                        </button>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                                M
                            </div>
                            <div class="ml-2 text-sm font-semibold">Marta Curtis</div>
                            <div
                                class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                                2
                            </div>
                        </button>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full">
                                P
                            </div>
                            <div class="ml-2 text-sm font-semibold">Philip Tucker</div>
                        </button>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full">
                                C
                            </div>
                            <div class="ml-2 text-sm font-semibold">Christine Reid</div>
                        </button>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full">
                                J
                            </div>
                            <div class="ml-2 text-sm font-semibold">Jerry Guzman</div>
                        </button>
                    </div>
                    <div class="flex flex-row items-center justify-between text-xs mt-6">
                        <span class="font-bold">Archivied</span>
                        <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">7</span>
                    </div>
                    <div class="flex flex-col space-y-1 mt-4 -mx-2">
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                                H
                            </div>
                            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-auto h-screen p-6">
                <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
                    <div class="flex flex-col h-full overflow-x-auto mb-4">
                        <div class="flex flex-col h-full">
                            <div class="min-w-[800px] sm:w-full md:w-[600px] lg:w-[30%] xl:w-[100%] mx-auto">
                                <div class=flex-grow col-start-1 col-end-8 p-3 rounded-lg h-full">
                                    <div id="chatbox" class="p-4 h-80 overflow-y-auto flex flex-col">
                                        <div class="mb-2 text-right">
                                            <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">hello</p>
                                        </div>
                                        <div class="mb-2">
                                            <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
                                        </div>
                                        <div class="mb-2 text-right">
                                            <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">this example of chat</p>
                                        </div>
                                        <div class="mb-2">
                                            <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
                                        </div>
                                        <div class="mb-2 text-right">
                                            <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">design with tailwind</p>
                                        </div>
                                        <div class="mb-2">
                                            <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-t flex">
                        <input id="user-input" type="text" placeholder="Type a message" class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button id="send-button" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-300">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const chatbox = document.getElementById("chatbox");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");

    let isChatboxOpen = true; // Set the initial state to open

    // Add an event listener to the send button
    sendButton.addEventListener("click", function () {
        const userMessage = userInput.value;
        if (userMessage.trim() !== "") {
            addUserMessage(userMessage);
            respondToUser(userMessage);
            userInput.value = "";
        }
    });

    userInput.addEventListener("keyup", function (event) {
        if (event.key === "Enter") {
            const userMessage = userInput.value;
            addUserMessage(userMessage);
            respondToUser(userMessage);
            userInput.value = "";
        }
    });

    function addUserMessage(message) {
        const messageElement = document.createElement("div");
        messageElement.classList.add("mb-2", "text-right");
        messageElement.innerHTML = `<p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
        chatbox.appendChild(messageElement);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    function addBotMessage(message) {
        const messageElement = document.createElement("div");
        messageElement.classList.add("mb-2");
        messageElement.innerHTML = `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${message}</p>`;
        chatbox.appendChild(messageElement);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    function respondToUser(userMessage) {
        // Replace this with your chatbot logic
        setTimeout(() => {
            addBotMessage("This is a response from the chatbot.");
        }, 500);
    }
</script>