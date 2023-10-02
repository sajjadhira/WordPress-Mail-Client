<!-- wirte list using tailwind css -->

<div class="wrap">
    <div class="flex flex-row w-full h-16 bg-white-600">
        <h2 class="font-bold text-3xl p-3">Settings</h2>
    </div>

    <!-- create view with tailwind css -->

    <form action="" method="post" class="bg-white p-3 text-lg mb-1 rounded">
        <div class="flex flex-col">
            <label for="email" class="text-lg font-bold">Email</label>
            <input type="email" name="email" id="email" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="password" class="text-lg font-bold">Password</label>
            <input type="password" name="password" id="password" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="host" class="text-lg font-bold">Host</label>
            <input type="text" name="host" id="host" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="port" class="text-lg font-bold">Port</label>
            <input type="number" name="port" id="port" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="encryption" class="text-lg font-bold">Encryption</label>
            <input type="text" name="encryption" id="encryption" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg font-bold">Name</label>
            <input type="text" name="name" id="name" class="border-2 border-gray-400 rounded p-1">
        </div>
        <div class="flex flex-col">
            <label for="signature" class="text-lg font-bold">Signature</label>
            <textarea name="signature" id="signature" cols="30" rows="10" class="border-2 border-gray-400 rounded p-1"></textarea>
        </div>
        <div class="flex flex-col">
            <label for="signature" class="text-lg font-bold">Signature</label>
            <textarea name="signature" id="signature" cols="30" rows="10" class="border-2 border-gray-400 rounded p-1"></textarea>

        </div>

        <!-- add submit button -->
        <div class="flex flex-col">
            <input type="submit" value="Save" class="bg-blue-500 text-white font-bold p-2 rounded">
        </div>
    </form>
</div>