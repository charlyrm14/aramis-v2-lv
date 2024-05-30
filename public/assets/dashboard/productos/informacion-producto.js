const informacionProductoModal = $('#kt_modal_producto_informacion');

informacionProductoModal.on('show.bs.modal', function ( e ) {
    
    const button = $( e.relatedTarget );
    const modal = $( this );
    const dataNombreProducto = button.data('bs-nombre-producto');
    const dataLlavePoliza = button.data('bs-llave-poliza');
    
    const headingNombreProducto = $(".heading-nombre-producto").text( dataNombreProducto + ' / ' + dataLlavePoliza);
});