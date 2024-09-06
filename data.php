<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris Laboratorium</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #0044cc;
    }

    table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
    }

    .btn {
        display: inline-block;
        padding: 8px 12px;
        margin-right: 5px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        border: none;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #0044cc;
        color: #fff;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #002a80;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .modal-body input,
    .modal-body select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .modal-footer {
        border-top: none;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Inventaris Laboratorium</h2>
        <button class="btn btn-primary" onclick="openModal('add')">Tambah Data</button>
        <table>
            <thead>
                <tr>
                    <th>Nama Laboratorium</th>
                    <th>Laboran</th>
                    <th>Status Laboratorium</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Laboratorium A</td>
                    <td>John Doe</td>
                    <td>Tersedia</td>
                    <td>
                        <button class="btn btn-primary" onclick="openModal('edit')">Edit</button>
                        <button class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Laboratorium B</td>
                    <td>Jane Smith</td>
                    <td>Tidak Tersedia</td>
                    <td>
                        <button class="btn btn-primary" onclick="openModal('edit')">Edit</button>
                        <button class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Labor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="labName" placeholder="Nama Laboratorium" required><br>
                    <input type="text" id="labStaff" placeholder="Laboran" required><br>
                    <select id="labStatus">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="saveData()">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    // Function to open modal for add or edit
    function openModal(mode) {
        var modal = document.getElementById('myModal');
        var title = document.querySelector('.modal-title');
        var labNameInput = document.getElementById('labName');
        var labStaffInput = document.getElementById('labStaff');
        var labStatusSelect = document.getElementById('labStatus');

        if (mode === 'add') {
            title.textContent = 'Tambah Data Laboratorium';
            labNameInput.value = '';
            labStaffInput.value = '';
            labStatusSelect.value = 'Tersedia';
        } else if (mode === 'edit') {
            title.textContent = 'Edit Data Labor';
            labNameInput.value = 'Lab Pemrograman'; // Ganti dengan nilai yang sesuai untuk edit
            labStaffInput.value = 'John Doe'; // Ganti dengan nilai yang sesuai untuk edit
            labStatusSelect.value = 'Tersedia'; // Ganti dengan nilai yang sesuai untuk edit
        }

        modal.style.display = 'block';
    }

    // Function to save data (simulated)
    function saveData() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
        alert('Data berhasil disimpan.'); // Pesan sukses simpan
    }

    // Function to confirm delete
    function confirmDelete() {
        if (confirm('Apakah Anda yakin ingin menghapus data?')) {
            alert('Data berhasil dihapus.'); // Simulasi penghapusan data
        }
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
    </script>
</body>

</html>