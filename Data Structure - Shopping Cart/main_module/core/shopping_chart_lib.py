class ShoppingChart:
    product_chart = {}

    def tambah_produk(self, kode_produk, kuantitas):
        if kode_produk in self.product_chart:
            self.product_chart[kode_produk] += kuantitas
        else:
            self.product_chart[kode_produk] = kuantitas


    def hapus_produk(self, kode_produk):
        if kode_produk in self.product_chart: # kalau dihilangkan - O(2 log N) max -> O(log n) -> O(1) untuk hash table rata2
            del self.product_chart[kode_produk]

    def tampilkan_chart(self):
        #for key, value in self.product_chart.items():
        #    print(f'{key} ({value})')
        sorted_chart = self.get_sorted_chart()
        for product in sorted_chart:
            #print(product)
            print(f'{product.name} ({product.value})')

    def get_sorted_chart(self):
        # did this on the live coding, i barely knew python sorting at that time :)
        chart_list = []
        for key, value in self.product_chart.items():
            chart_list.append(Product(key, value))
        n = len(chart_list)
        print(n)
        #
        for i in range(0, n - 1):
            print(i)
            currVal = chart_list[i].value
            maxVal = currVal
            maxIndex = i
            for j in range(i + 1, n):
                if maxVal < chart_list[j].value:
                    maxVal = chart_list[j].value
                    maxIndex = j

            temp = chart_list[i]
            chart_list[i] = chart_list[maxIndex]
            chart_list[maxIndex] = temp

        return chart_list


class Product:
    name = ''
    value = 0

    def __init__(self, name, value):
        self.name = name
        self.value = value

class Util:
    # can add some util functions later on
    pass
