@extends('layouts.backend')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
<div class="card p-4 bg-white rounded-2xl shadow">
    <div class="flex justify-between items-center mb-3">
        <button onclick="prevMonth()" class="px-2 py-1 bg-gray-200 rounded">
            <i class="fas fa-chevron-left"></i>
        </button>
        <h2 id="calendarTitle" class="text-xl font-bold">📅 Kalender</h2>
        <button onclick="nextMonth()" class="px-2 py-1 bg-gray-200 rounded">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <div id="calendar" class="grid grid-cols-7 gap-1 text-center"></div>
    <p id="todayDate" class="mt-2 text-center text-sm"></p>
</div>


</div>
@endsection
@push('scripts')
<script>
    let currentDate = new Date();

    function renderCalendar(date = new Date()) {
        const calendar = document.getElementById("calendar");
        const todayDateEl = document.getElementById("todayDate");
        const calendarTitle = document.getElementById("calendarTitle");

        const year = date.getFullYear();
        const month = date.getMonth();
        const today = new Date();

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        calendarTitle.innerHTML = `<span class="gradient-text">📅 ${monthNames[month]} ${year}</span>`;
        todayDateEl.innerText = `${today.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' })}`;

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        calendar.innerHTML = "";
        const days = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
        days.forEach(day => {
            calendar.innerHTML += `<div class="calendar-day-header text-gray-500 font-semibold text-sm">${day}</div>`;
        });

        for (let i = 0; i < firstDay; i++) {
            calendar.innerHTML += `<div class="calendar-day empty"></div>`;
        }

        for (let d = 1; d <= lastDate; d++) {
            const isToday = (
                d === today.getDate() &&
                month === today.getMonth() &&
                year === today.getFullYear()
            );
            calendar.innerHTML += `
                <div class="calendar-day ${isToday ? 'today bg-emerald-500 text-white font-bold' : 'bg-gray-100 hover:bg-indigo-100'}"
                     onclick="selectDate(${d}, ${month}, ${year})"
                     style="animation-delay: ${d * 15}ms;">
                    ${d}
                </div>`;
        }

        document.querySelectorAll('.calendar-day').forEach(day => {
            day.classList.add('animate');
        });
    }

    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    }

    function nextMonth() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    }

    function selectDate(day, month, year) {
        alert(`Tanggal dipilih: ${day}/${month + 1}/${year}`);
    }

    renderCalendar(currentDate);
</script>
@endpush
