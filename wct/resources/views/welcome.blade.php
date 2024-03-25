<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <nav class=" border-gray-200 py-2.5 bg-[#1D5D9B] fixed left-0 right-0 z-10 top-0">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{asset('asset/logo.jpg')}}" class="h-6 mr-3 sm:h-9" alt=" Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">CareerQuest</span>
            </a>
            <div class="flex items-center lg:order-2">
                <div class="hidden mt-2 mr-4 sm:inline-block">
                    <span></span>
                </div>

                <a href="#"
                   class="text-white bg-yellow-500 hover:bg-amber-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-yellow-500 focus:outline-none ">Sign In</a>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4  hover:text-yellow-300  rounded lg:bg-transparent  lg:p-0 text-white"
                           aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-white hover:text-amber-300  border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0  lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Job</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Test</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</header>

<main >

    <p class="text-3xl text-center mt-28">Question 1/6</p>

    <h2 class=" font-black text-2xl text-center mt-5">What is your main goal on CareerQuest ?</h2>

   <section class="card flex justify-center gap-10  flex-wrap">
       <div class="text-center">

       </div>
       <div class="mt-20">
           <a class="p-8 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
              href="#">
               <img src="{{asset('asset/test1.png')}}" class="shadow rounded-lg overflow-hidden border" >
               <div class="mt-6">

                   <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                   </p>
                   <div class="mt-5">
                       <div class="flex items-center justify-center border-black">
                           <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                               <input type="radio">
                           </div>
                       </div>

                   </div>
               </div>
           </a>
       </div>
       <div class="row-span-2 mt-20">
           <a class="p-8 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
              href="#">
               <img src="{{asset('asset/test2.png')}}" class="shadow rounded-lg overflow-hidden border" >
               <div class="mt-6">

                   <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                   </p>
                   <div class="mt-5">
                       <div class="flex items-center justify-center border-black">
                           <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                               <input type="radio">
                           </div>
                       </div>
                   </div>
               </div>
           </a>
       </div>
   </section>

        <p class="text-3xl text-center mt-28">Question 2/6</p>

        <h2 class=" font-black text-2xl text-center mt-3">I have knowledge, experience, or interest in ... </h2>
        <p class="text-center mt-3">select 2 options most relevant to you.

    <section class="card flex justify-center gap-10  flex-wrap">
        <div class="text-center"></div>
        <div class="mt-10">
            <a class="p-5 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
               href="#">
                <img src="{{asset('asset/test1.png')}}" class="shadow rounded-lg overflow-hidden border" >
                <div class="mt-6">

                    <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-center border-black">
                            <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row-span-2 mt-10">
            <a class="p-5 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
               href="#">
                <img src="{{asset('asset/test2.png')}}" class="shadow rounded-lg overflow-hidden border" >
                <div class="mt-6">

                    <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-center border-black">
                            <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="mt-10">
            <a class="p-5 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
               href="#">
                <img src="{{asset('asset/test1.png')}}" class="shadow rounded-lg overflow-hidden border" >
                <div class="mt-6">

                    <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-center border-black">
                            <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="row-span-2 mt-10">
            <a class="p-5 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
               href="#">
                <img src="{{asset('asset/test2.png')}}" class="shadow rounded-lg overflow-hidden border" >
                <div class="mt-8">

                    <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-center border-black">
                            <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row-span-2 mt-10">
            <a class="p-5 mx-auto max-w-sm border border-indigo-200 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
               href="#">
                <img src="{{asset('asset/test2.png')}}" class="shadow rounded-lg overflow-hidden border" >
                <div class="mt-8">

                    <p class="mt-2 text-gray-600">Create Exercises for any subject with the topics you and your students care about.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center justify-center border-black">
                            <div class="h-6 w-6  rounded-full border-black border-2 flex items-center justify-center">

                                <input type="radio">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
        <p class="text-3xl text-center mt-28">Question 4/6</p>
        <h2 class=" font-black text-2xl text-center mt-3">Describe a challenging project you've worked on as a web developer.
            What were the main obstacles you faced, and how did you overcome them? </h2>
        <p class="text-center mt-3"> Write down here to describe your challenging.
    </section>
    <div class="mx-14 mt-10 border-2 border-blue-400 rounded-lg">

        <div class="p-8">

            <div class="my-6 flex gap-4">
                </div>
            <div class="">
                <textarea name="textarea" id="text" cols="30" rows="10" class="mb-10 h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-black-300">Message</textarea>
            </div>

        </div>
    </div>
    <div class="">
       <div> <p class="text-3xl text-center mt-28">Question 6/6</p>

        <h2 class=" font-black text-2xl text-center mt-7">How do you ensure that the websites or web applications you develop
            are accessible to users with disabilities?</h2>
        <p class="text-center mt-5">Choose the option which best descibes for you.
           <div class="flex justify-center">
        <div class="flex flex-col max-w-md m-12">
            <div class="flex flex-col sm:flex-row rounded-xl border border-gray-700 py-1 px-1 w-full text-center sm:text-left">

                <div class="flex flex-col py-2 pr-2">

                    <p class="text-sm font-hairline"> I prioritize accessibility by adhering to WCAG guidelines, implementing features like alternative text, semantic HTML, keyboard navigation, and ARIA roles. I conduct regular audits and tests to ensure usability for users with disabilities.</p>
                </div>
            </div>
            <button type="button"
                    class="content-center text-center p-5 rounded bg-gray-200 text-black mt-3  text-xs font-medium uppercase leading-normal lg:mb-0">
                Yes
            </button>
           </div>

               <div class="flex flex-col max-w-md m-12">
                   <div class="flex flex-col sm:flex-row rounded-xl border border-gray-700 py-1 px-1 w-full text-center sm:text-left">

                       <div class="flex flex-col py-2 pr-2">

                           <p class="text-sm font-hairline">Unfortunately, I don't prioritize accessibility in my development process. While I understand its importance, I may not have the necessary knowledge or resources to implement accessibility features effectively. </p>
                       </div>
                   </div>
                   <button type="button"
                           class="content-center text-center p-5 rounded bg-gray-200 text-black mt-3  text-xs font-medium uppercase leading-normal lg:mb-0">
                       No
                   </button>

           </div>
           </div>
                    <div class="flex justify-center" >
                        <input type="text"
                               class=" flex content-center text-center p-5 rounded bg-gray-200 text-black mt-3 justify-center text-xs font-medium uppercase leading-normal lg:mb-0"
                               placeholder="Other">

                    </div>

       </div>

    </div>



</main>

</body>
</html>
