document.getElementById("taskForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Ambil data dari form
    const studentName = document.getElementById("studentName").value;
    const subject = document.getElementById("subject").value;
    const taskTitle = document.getElementById("taskTitle").value;
    const deadline = document.getElementById("deadline").value;
    const status = document.getElementById("status").value;

    // Validasi sederhana
    if (!studentName || !subject || !taskTitle || !deadline || !status) {
        alert("Semua field harus diisi!");
        return;
    }

    // Kirim data ke server menggunakan fetch (AJAX)
    fetch("save_task.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `studentName=${studentName}&subject=${subject}&taskTitle=${taskTitle}&deadline=${deadline}&status=${status}`,
    })
        .then((response) => response.text())
        .then((result) => {
            // Tampilkan notifikasi
            alert("Data berhasil disimpan!");

            // Tambahkan data ke tabel tanpa reload halaman
            const table = document.getElementById("taskTable").getElementsByTagName("tbody")[0];
            const newRow = table.insertRow();
            newRow.innerHTML = `
                <td>${table.rows.length + 1}</td>
                <td>${studentName}</td>
                <td>${subject}</td>
                <td>${taskTitle}</td>
                <td>${deadline}</td>
                <td>${status}</td>
            `;

            // Reset form setelah submit
            document.getElementById("taskForm").reset();
        })
        .catch((error) => {
            console.error("Terjadi kesalahan:", error);
        });
});
