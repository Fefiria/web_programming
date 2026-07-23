//Import SweetAlert2
import Swal from 'sweetalert2';
window.Swal = Swal; // Makes Swal available anywhere in your Blade files

//Import Bootstrap Icons CSS
import 'bootstrap-icons/font/bootstrap-icons.css';

//Import Flatpickr
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';
import 'flatpickr/dist/themes/dark.css';
window.flatpickr = flatpickr;

//Import FilePond Core & Preview Styles
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';

//Import FilePond Plugins
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

//Register Plugins & Globalize FilePond
FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType
);
window.FilePond = FilePond;

document.addEventListener('DOMContentLoaded', () => {
    const birthDateInput = document.getElementById('birth_date');

    if (birthDateInput) {
        flatpickr(birthDateInput, {
            dateFormat: 'Y-m-d',
            altInput: true,
            altFormat: 'd F Y',
            allowInput: true,
            maxDate: 'today',
            theme: 'light',
            showMonths: 1,
        });
    }

    const cvInput = document.querySelector('.filepond');

    if (cvInput) {
        FilePond.create(cvInput, {
            allowMultiple: false,
            acceptedFileTypes: ['application/pdf'],
            maxFileSize: '2MB',
            labelIdle: 'Seret & lepas CV Anda di sini atau <span class="filepond--label-action">Cari</span>',
            labelInvalidField: 'Field ini berisi file yang tidak valid',
            fileValidateTypeLabelExpectedTypes: 'Hanya file PDF yang diperbolehkan',
            fileValidateTypeLabelExpectedType: 'Harap pilih file PDF',
            labelMaxFileSize: 'Ukuran file maksimal 2MB',
            labelFileProcessingError: 'Terjadi kesalahan saat mengunggah file',
            labelFileTypeNotAllowed: 'Tipe file tidak didukung',
            labelMaxFileSizeExceeded: 'Ukuran file melebihi batas 2MB',
        });
    }
});

