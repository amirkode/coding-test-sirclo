class ShoppingChart:
    product_chart = {}

    def tambah_produk(self, kode_produk, kuantitas):
        if kode_produk in self.product_chart:
            self.product_chart[kode_produk] += kuantitas
        else:
            self.product_chart[kode_produk] = kuantitas


    def hapus_produk(self, kode_produk):
        if kode_produk in self.product_chart:
            del self.product_chart[kode_produk]

    def tampilkan_chart(self):
        for key, value in self.product_chart.items():
            print(f'{key} ({value})')


class Util:
    # can add some util functions later on
    pass
