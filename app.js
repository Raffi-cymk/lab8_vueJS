const { createApp } = Vue;

createApp({

    data() {
        return {

            artikel: [],

            form: {
                judul: '',
                isi: ''
            }

        }
    },

    methods: {

        loadData() {

            axios.get('http://localhost/lab7_php_ci/public/post')

            .then((response) => {

                this.artikel = response.data.artikel;

            })

            .catch((error) => {

                console.log(error);

            });

        },

        simpanData() {

            axios.post(
                'http://localhost/lab7_php_ci/public/post',
                this.form
            )

            .then((response) => {

                alert('Artikel berhasil ditambahkan');

                this.form.judul = '';
                this.form.isi = '';

                this.loadData();

            })

            .catch((error) => {

                console.log(error);

            });

        },

        hapusData(id) {

            if(confirm('Yakin ingin menghapus artikel ini?')) {

                axios.delete(
                    'http://localhost/lab7_php_ci/public/post/' + id
                )

                .then((response) => {

                    alert('Artikel berhasil dihapus');

                    this.loadData();

                })

                .catch((error) => {

                    console.log(error);

                });

            }

        }

    },

    mounted() {

        this.loadData();

    }

}).mount('#app');