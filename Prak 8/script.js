const form = document.getElementById('formMahasiswa');
const tbody = document.getElementById('tbodyMahasiswa');
let editingRow = null;
let nomorUrut = 1; // Tambahkan variabel nomorUrut

form.addEventListener('submit', function(event) {
    event.preventDefault();
    if (editingRow) {
        editData();
    } else {
        tambahData();
    }
});

function tambahData() {
    const nama = document.getElementById('nama').value;
    const nim = document.getElementById('nim').value;

    if (nama && nim) {
        if (editingRow) {
            editingRow.cells[0].textContent = nomorUrut; // Update nomor urut pada baris yang diedit
            editingRow.cells[1].textContent = nama;
            editingRow.cells[2].textContent = nim;
            editingRow = null;
            form.reset();
        } else {
            tambahBarisTabel(nomorUrut, nama, nim); // Tambahkan nomor urut pada fungsi tambahBarisTabel
            form.reset();
        }
        nomorUrut++; // Tambahkan 1 ke nomor urut setiap kali menambahkan data baru
    } else {
        alert('Nama dan NIM harus diisi!');
    }
}

function tambahBarisTabel(nomorUrut, nama, nim) {
    const newRow = tbody.insertRow();
    
    const cellNomorUrut = newRow.insertCell(0);
    cellNomorUrut.textContent = nomorUrut;

    const cellNama = newRow.insertCell(1);
    cellNama.textContent = nama;

    const cellNIM = newRow.insertCell(2);
    cellNIM.textContent = nim;

    const cellAksi = newRow.insertCell(3); // Sesuaikan indeks sel untuk tombol Edit dan Hapus

    const btnEdit = document.createElement('button');
    btnEdit.textContent = 'Edit';
    btnEdit.addEventListener('click', function() {
        editingRow = newRow;
        document.getElementById('nama').value = newRow.cells[1].textContent;
        document.getElementById('nim').value = newRow.cells[2].textContent;
    });
    cellAksi.appendChild(btnEdit);

    const btnHapus = document.createElement('button');
    btnHapus.textContent = 'Hapus';
    btnHapus.addEventListener('click', function() {
        tbody.removeChild(newRow);
    });
    cellAksi.appendChild(btnHapus);
}

function editData() {
    tambahData(); // Fungsi tambahData dapat digunakan untuk mengganti data pada baris yang sudah ada
}
