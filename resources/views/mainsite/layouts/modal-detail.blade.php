<!-- MODAL DETALLE PRODUCTO -->
<div class="modal fade" tabindex="-1" role="dialog" id="product-detail-modal" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 100%; height: 100%;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #07322a;">
                <h5 class="modal-title" id="modal-detail-product-name" style="color:#fff;">NATURAL ENERGY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="font-size: 30px; color:#fff;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img id="image-product-detail" class="img-fluid">

                        <div class=" pt-5 ml-3">
                            <h5>+ INFO</h5>
                            <hr />
                            <p style="font-weight: 500;" id="m-info-detail"></p>
                            <p style="font-weight: bold;" id="">Metodo de empleo:</p>
                            <p id="recommend-detail"></p>
                            <p style="font-weight: bold;" id="">PRECAUCIÓN:</p>
                            <p id="modal-detail-warning"></p>
                        </div>
                    </div>
                    <div class="col-md-6 product_content">
                        <h4 id="title-name-product-detail-heading" class="ml-3"></h4>
                        <img id="image-product-table-detail" class="img-fluid">
                        <div class="space-ten"></div>
                        <div class="pt-2">
                            <hr />
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-map-marker-alt"></i><a href="" class="ml-3 text-center">Ver
                                        tiendas</a>
                                </div>
                                <div class="col">
                                    <i class="fas fa-phone"></i> <a href="tel:3338252909">333 38252909</a>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DETALLE PRODUCTO -->

<script>
    jQuery(document).ready(function() {


        $('.btn-details-prod').click(function(e) {
            e.preventDefault();
            let id = $(this).attr("id");
            let _token = $('meta[name="csrf-token"]').attr('content');

            jQuery.ajax({
                url: "{{ route('detail-product') }}",
                method: 'post',
                data: {
                    id: id,
                    _token: _token
                },
                dataType: "JSON",

                success: function(data) {
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $('#modal-detail-product-name').text('NATURAL ENERGY - ' + data[i]
                            .name + ' - ' + data[i].content)
                        $('#title-name-product-detail-heading').text(data[i].description)
                        $('#image-product-table-detail').attr("src",
                            '{{ asset('assets') }}/products/tablas/' + data[i]
                            .nutrition_table_image)
                        $('#m-info-detail').text(data[i].m_info)
                        $('#recommend-detail').text(data[i].recomend)
                        $('#modal-detail-warning').text(data[i].warning)
                        if (data[i].image == '') {
                            $('#image-product-detail').attr("src",
                                '{{ asset('assets') }}/products/generic-modal.png')

                        } else {
                            $('#image-product-detail').attr("src",
                                '{{ asset('assets') }}/products/' + data[i].image)
                        }

                    }
                }
            });
            $('#product-detail-modal').modal("show");

        });
    });

</script>
