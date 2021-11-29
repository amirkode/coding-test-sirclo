import unittest
from main_module.core.shopping_chart_lib import ShoppingChart


class ShoppingChartTest(unittest.TestCase):

    def test_product_number_after_adding(self):
        shopping_chart = ShoppingChart()
        # add 3 products
        shopping_chart.tambah_produk("Apel Merah", 1)
        shopping_chart.tambah_produk("Apel Merah", 4)
        shopping_chart.tambah_produk("Apel Merah", 2)
        assert len(shopping_chart.product_chart) == 1

    def test_product_number_after_removing(self):
        shopping_chart = ShoppingChart()
        # add 3 products
        shopping_chart.tambah_produk("Apel Merah", 1)
        shopping_chart.tambah_produk("Apel Merah", 4)
        shopping_chart.tambah_produk("Apel Merah", 2)
        # remove Apel Merah
        shopping_chart.hapus_produk("Apel Merah")
        assert len(shopping_chart.product_chart) == 0

    def test_product_count(self):
        shopping_chart = ShoppingChart()
        # add 3 products
        shopping_chart.tambah_produk("Apel Merah", 1)
        shopping_chart.tambah_produk("Apel Merah", 4)
        shopping_chart.tambah_produk("Apel Merah", 2)
        assert shopping_chart.product_chart["Apel Merah"] == 7

    def test_show_chart(self):
        shopping_chart = ShoppingChart()
        shopping_chart.tambah_produk("Pisang Hijau", 1)
        shopping_chart.tambah_produk("Semangka Kuning", 4)
        shopping_chart.tambah_produk("Apel Merah", 1)
        shopping_chart.tambah_produk("Apel Merah", 4)
        shopping_chart.tambah_produk("Apel Merah", 2)

        assert len(shopping_chart.product_chart) == 3

        shopping_chart.hapus_produk("Semangka Merah")

        assert len(shopping_chart.product_chart) == 3

        shopping_chart.hapus_produk("Semangka Kuning")

        assert len(shopping_chart.product_chart) == 2

        shopping_chart.tampilkan_chart()


