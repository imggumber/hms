<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head', ['pageTitle' => 'Login - HMS'])
</head>

<body>
    <main id="login-page" style=" background:url('{{ asset('assets/images/bg.jpg') }}');">
        <div class="container flex flex-nowrap justify-center">
            <div class="login grid grid-cols-2 bg-gray-100 shadow-xl">
                <div class="w-96"
                    style="background:url('{{ asset('assets/images/banner.jpg') }}');  background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="w-96 py-[80px] px-4">
                  <div class="text-center flex justify-center flex-col items-center">
                    <img src="{{ asset('assets/images/logo.png') }}" class="mb-7 shadow-md"  alt="HMS Logo" width="60px" height="60px">
                    <h3 class="text-black text-2xl mb-3">Sign Into Your Account</h3>
                  </div>
                    <form class="grid" method="post"> @csrf
                        <div class="mb-3">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email"
                                class="bg-gray-100  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="login@hms.com" required />
                        </div>
                        <div class="mb-3">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password"
                                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="•••••••••" required />
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between align-bottom flex-nowrap">
                                <div class="flex items-center">
                                    <input checked id="checked-checkbox" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                        Me</label>
                                </div>
                                <div class="forget">
                                    <a href="#" class="ms-2 text-sm font-medium text-gray-900">Forget
                                        Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="md-3">
                            <button type="button"
                                class="text-white bg-blue-700 w-full hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                                In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
