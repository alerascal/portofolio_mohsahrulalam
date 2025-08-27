import './bootstrap';
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'ap1',
    forceTLS: true,
});
window.Echo.channel('my-channel')
    .listen('.my-event', (e) => {
        console.log('Pesan dari server:', e.message);
        alert(e.message);
    });
    let currentDate = new Date();

function renderCalendar(date) {
    const month = date.getMonth();
    const year = date.getFullYear();

    const calendar = document.getElementById("calendar");
    const title = document.getElementById("calendarTitle");
    const todayDate = document.getElementById("todayDate");

    // Nama bulan
    const monthNames = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];
    title.innerText = `${monthNames[month]} ${year}`;

    // Tanggal hari ini
    const today = new Date();
    todayDate.innerText = `Hari ini: ${today.getDate()} ${monthNames[today.getMonth()]} ${today.getFullYear()}`;

    // Render kalender
    calendar.innerHTML = "";

    // Hari pertama bulan ini
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Tambah kotak kosong sebelum tanggal 1
    for (let i = 0; i < (firstDay === 0 ? 6 : firstDay - 1); i++) {
        const emptyCell = document.createElement("div");
        emptyCell.classList.add("calendar-empty");
        calendar.appendChild(emptyCell);
    }

    // Render hari-hari dalam bulan
    for (let d = 1; d <= daysInMonth; d++) {
        const dayCell = document.createElement("div");
        dayCell.innerText = d;
        dayCell.classList.add("calendar-day");

        // Highlight jika hari ini
        if (
            d === today.getDate() &&
            month === today.getMonth() &&
            year === today.getFullYear()
        ) {
            dayCell.classList.add("calendar-today");
        }

        calendar.appendChild(dayCell);
    }
}

// Navigasi bulan
window.prevMonth = function () {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
};

window.nextMonth = function () {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
};

// Load kalender pertama kali
document.addEventListener("DOMContentLoaded", () => {
    renderCalendar(currentDate);
});

