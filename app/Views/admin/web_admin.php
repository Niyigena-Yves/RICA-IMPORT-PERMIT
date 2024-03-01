<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="favorite icon" href="<?= base_url(); ?>assets/images/logo.png">
    <script src="https://cdn.tiny.cloud/1/bsc1lfi9c6r1yupdoa38bq64w447g2eets2wqbrvq1bvzch0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS Libraries -->
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
    <title></title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateBannerButton = document.getElementById('updateBannerButton');
            const newBannerImageInput = document.getElementById('newBannerImage');
            const bannerIDSelect = document.getElementById('bannerID'); // Updated to select element

            // Load saved images from localStorage
            const bannerImages = document.querySelectorAll('[data-banner-id]');
            bannerImages.forEach(bannerImage => {
                const bannerID = bannerImage.getAttribute('data-banner-id');
                const savedImageUrl = localStorage.getItem(`savedImageUrl_${bannerID}`);
                if (savedImageUrl) {
                    bannerImage.src = savedImageUrl;
                }
            });

            updateBannerButton.addEventListener('click', function () {
                const bannerID = bannerIDSelect.value;
                const currentBannerImage = document.querySelector(`[data-banner-id="${bannerID}"]`);

                if (currentBannerImage) {
                    if (newBannerImageInput && newBannerImageInput.files.length > 0) {
                        const newImageFile = newBannerImageInput.files[0];
                        const newImageUrl = URL.createObjectURL(newImageFile);

                        currentBannerImage.src = newImageUrl;
                        newBannerImageInput.value = '';
                        bannerIDSelect.selectedIndex = 0;

                        localStorage.setItem(`savedImageUrl_${bannerID}`, newImageUrl);
                    } else {
                        alert('No image selected.');
                    }
                } else {
                    alert('Banner ID not found.');
                }
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openButton = document.getElementById("openCountryFormButton");
            const closeButton = document.getElementById("closeCountryFormButton");
            const formContainer = document.getElementById("countryFormContainer");

            const body = document.body;

            openButton.addEventListener("click", function () {
                formContainer.classList.add("show");
                body.classList.add("popup-open");
            });

            closeButton.addEventListener("click", function () {
                formContainer.classList.remove("show");
                body.classList.remove("popup-open");
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openButton = document.getElementById("openCountryDeleteButton");
            const closeButton = document.getElementById("closeCountryDeleteButton");
            const formContainer = document.getElementById("countryDeleteContainer");

            const body = document.body;

            openButton.addEventListener("click", function () {
                formContainer.classList.add("show");
                body.classList.add("popup-open");
            });

            closeButton.addEventListener("click", function () {
                formContainer.classList.remove("show");
                body.classList.remove("popup-open");
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openButton = document.getElementById("openCourseFormButton");
            const closeButton = document.getElementById("closeCourseFormButton");
            const formContainer = document.getElementById("courseFormContainer");

            const body = document.body;

            openButton.addEventListener("click", function () {
                formContainer.classList.add("show");
                body.classList.add("popup-open");
            });

            closeButton.addEventListener("click", function () {
                formContainer.classList.remove("show");
                body.classList.remove("popup-open");
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openButton = document.getElementById("openCourseDeleteButton");
            const closeButton = document.getElementById("closeCourseDeleteButton");
            const formContainer = document.getElementById("courseDeleteContainer");

            const body = document.body;

            openButton.addEventListener("click", function () {
                formContainer.classList.add("show");
                body.classList.add("popup-open");
            });

            closeButton.addEventListener("click", function () {
                formContainer.classList.remove("show");
                body.classList.remove("popup-open");
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openButton = document.getElementById("openBannerDeleteButton");
            const closeButton = document.getElementById("closeBannerDeleteButton");
            const formContainer = document.getElementById("bannerDeleteContainer");

            const body = document.body;

            openButton.addEventListener("click", function () {
                formContainer.classList.add("show");
                body.classList.add("popup-open");
            });

            closeButton.addEventListener("click", function () {
                formContainer.classList.remove("show");
                body.classList.remove("popup-open");
            });
        });
    </script>
    <style>
        body.popup-open {
            background: rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        h2 {
            font-size: 18px !important;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #036e9d;

        }

        .form-container {
            width: 30%;
            margin-right: 10px;
        }

        .form-container form {
            padding: 20px !important;
        }

        .form-wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {

            .form-container {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        .popup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            background-color: white;
            z-index: 1000;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 25%;
            padding: 20px !important;
        }

        .popup-form.show {
            display: block;
        }

        .close-button {
            position: absolute;
            top: 5px;
            right: 10px;
            background-color: transparent;
            border: none;
            padding: 5px;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
        }

        .close-button:hover {
            color: #ff8080;
        }
    </style>
</head>

<body class="bg-gray-200">

    <!-- <img id="bannerImage1" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg" data-banner-id="banner1"
        alt="Banner Image">
    <br>
    <img id="bannerImage2" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg" data-banner-id="banner2"
        alt="Banner Image"> -->

    <div class="flex flex-wrap justify-between flex-wrapper pt-4">
        <div class="w-full max-w-md mx-auto w-1/4 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" id="bannerUpdateForm">

                <h2 class="text-xl font-semibold mb-4">Manage Banners</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerID">
                        Banner ID:
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="bannerID">
                        <option value="select" selected disabled>-- Select Banner ID --</option>
                        <option value="banner1">Banner 1</option>
                        <option value="banner2">Banner 2</option>
                        <option value="banner1">Banner 3</option>
                        <option value="banner2">Banner 4</option>
                        <option value="banner1">Banner 5</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="newBannerImage">
                        New Banner Image:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newBannerImage" type="file">
                </div>
                <div class="btns"
                    style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="update bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="updateBannerButton">
                        Update Banner
                    </button>
                    <button
                        class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="openBannerDeleteButton" style=" background: #ff8080;">
                        Delete Banner
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" id="">

                <h2 class="text-xl font-semibold mb-4">Manage Abroad Countries</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerID">
                        Update Country:
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="">
                        <option value="select" selected disabled>-- Select Country --</option>
                        <option value="armenia">Armenia</option>
                        <option value="azerbaijan">Azerbaijan</option>
                        <option value="cyprus">Cyprus</option>
                        <option value="india">India</option>
                        <option value="turkey">Turkey</option>
                        <option value="russia">Russia</option>
                        <option value="poland">Poland</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="uk">UK</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        New Country Image:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="file">
                </div>
                <div class="btns"
                    style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="update bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="">
                        Update Country
                    </button>
                    <button
                        class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="openCountryFormButton">
                        Add Country
                    </button>
                    <div class="delete pt-4"
                        style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                        <button class="text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                            type="button" id="openCountryDeleteButton" style=" background: #ff8080;">
                            Delete Country
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" id="">

                <h2 class="text-xl font-semibold mb-4">Manage Courses</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerID">
                        Update Course:
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="">
                        <option value="select" selected disabled>-- Select Course --</option>
                        <option value="">Video Production</option>
                        <option value="">Photography</option>
                        <option value="">Graphic Design</option>
                        <option value="">Web Design</option>
                        <option value="">Creative Arts</option>
                        <option value="">Computer System</option>
                        <option value="">Music</option>
                        <option value="">Electronic Services</option>
                        <option value="">Software Development</option>
                        <option value="">CCTV Camera</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        New Course Image:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="file">
                </div>
                <div class="btns"
                    style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="update bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="">
                        Update Course
                    </button>
                    <button
                        class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="openCourseFormButton">
                        Add Course
                    </button>
                    <div class="delete pt-4"
                        style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                        <button class="text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                            type="button" id="openCourseDeleteButton" style=" background: #ff8080;">
                            Delete Course
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="flex flex-wrap justify-between flex-wrapper pt-2">
        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-semibold mb-4">Update News</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="newsTitle">
                        News Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newsTitle" type="text" placeholder="Enter news title">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        News Image:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="file">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="newsContent">
                        News Content
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newsContent" placeholder="Enter news content" rows="4"></textarea>
                </div>
                <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save News
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container" id="">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-semibold mb-4">Update Upcoming Events</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                        Event Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="eventName" type="text" placeholder="Enter event name">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDate">
                        Event Date
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="eventDate" type="date">
                </div>
                <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save Event
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-semibold mb-4">Update Announcements</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="announcementTitle">
                        Announcement Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="announcementTitle" type="text" placeholder="Enter announcement title">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="announcementContent">
                        Announcement Content
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="announcementContent" placeholder="Enter announcement content" rows="4"></textarea>
                </div>
                <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save Announcement
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- POPUPS -->

    <div class="w-full max-w-md mx-auto w-1/4 px-2 popup-form" id="countryFormContainer">
        <button class="close-button" id="closeCountryFormButton">X</button>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Add Abroad Country</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="countryName">
                    Country Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="countryName" type="text" placeholder="Enter country name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Choose Country Image:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="" type="file">
            </div>
            <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                <button
                    class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add Country
                </button>
            </div>
        </form>
    </div>

    <div class="w-full max-w-md mx-auto w-1/4 px-2 popup-form" id="countryDeleteContainer">
        <button class="close-button" id="closeCountryDeleteButton">X</button>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Delete Country</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="countryName">
                    Country Name
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bannerID">
                    <option value="select" selected disabled>-- Select Country --</option>
                    <option value="armenia">Armenia</option>
                    <option value="azerbaijan">Azerbaijan</option>
                    <option value="cyprus">Cyprus</option>
                    <option value="india">India</option>
                    <option value="turkey">Turkey</option>
                    <option value="russia">Russia</option>
                    <option value="poland">Poland</option>
                    <option value="usa">USA</option>
                    <option value="canada">Canada</option>
                    <option value="uk">UK</option>
                </select>
            </div>
            <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" style=" background: #ff8080;">
                    Delete Country
                </button>
            </div>
        </form>
    </div>



    <div class="w-full max-w-md mx-auto w-1/4 px-2 popup-form" id="courseFormContainer">
        <button class="close-button" id="closeCourseFormButton">X</button>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Add Course</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="countryName">
                    Course Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="countryName" type="text" placeholder="Enter course name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Choose Course Image:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="" type="file">
            </div>
            <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                <button
                    class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add Course
                </button>
            </div>
        </form>
    </div>

    <div class="w-full max-w-md mx-auto w-1/4 px-2 popup-form" id="courseDeleteContainer">
        <button class="close-button" id="closeCourseDeleteButton">X</button>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Delete Course</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="countryName">
                    Course Name
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="">
                    <option value="select" selected disabled>-- Select Course --</option>
                    <option value="">Video Production</option>
                    <option value="">Photography</option>
                    <option value="">Graphic Design</option>
                    <option value="">Web Design</option>
                    <option value="">Creative Arts</option>
                    <option value="">Computer System</option>
                    <option value="">Music</option>
                    <option value="">Electronic Services</option>
                    <option value="">Software Development</option>
                    <option value="">CCTV Camera</option>
                </select>
            </div>
            <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" style=" background: #ff8080;">
                    Delete Course
                </button>
            </div>
        </form>
    </div>
    <div class="w-full max-w-md mx-auto w-1/4 px-2 popup-form" id="bannerDeleteContainer">
        <button class="close-button" id="closeBannerDeleteButton">X</button>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Delete Banner</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="countryName">
                    Banner ID
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="">
                    <option value="select" selected disabled>-- Select Banner ID --</option>
                    <option value="banner1">Banner 1</option>
                    <option value="banner2">Banner 2</option>
                    <option value="banner1">Banner 3</option>
                    <option value="banner2">Banner 4</option>
                    <option value="banner1">Banner 5</option>
                </select>
            </div>
            <div style="justify-content: center; align-items: center; text-align: center; align-content: center;">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" style=" background: #ff8080;">
                    Delete Banner
                </button>
            </div>
        </form>

        <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      height: 350,
    //   menubar: false,
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
  </script>
    </div>

</body>

</html>