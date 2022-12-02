let dataTable;
let dataTableIsInitialized=false;

// constante de opciones para darle formatos chevres a mi tabla como cambiar el lenguaje por ejemplo
const dataTableOptions = {
    // scrollX: "200px", //le pone una barra de desplazamiento suponiendo que sea una data grande
    // lengthMenu: [5, 10, 15, 20, 100, 200, 500],
    columnDefs: [
        { className: "centered", targets: [0, 1, 2] },
        { orderable: false, targets: [2] },// es para cancelar el ordenamiento de las columnas indicadas, inicia en 0
        // { searchable: false, targets: [0,2] }//para indicar que no busque en estas columnas
        //{ width: "50%", targets: [0] }
    ],
    // pageLength: 3,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};

// iniciliaza opciones de la dataTable
const initDataTable=async()=>{
    if(dataTableIsInitialized){
        dataTable.destroy();
    }

    await listUsers();

    dataTable=$("#dataTable").DataTable(dataTableOptions);
    dataTableIsInitialized=true;
};

// esto solo hacer listar la data(json)
const listUsers=async()=>{

    try{
        const response=await fetch('tabla-productos');
        const datos=await response.json();
        let contenido = '';
        datos.forEach((data,index) => {
            contenido+= `

            <tr>
                <td>${data.id}</td>
                <td>${data.name}</td>
                <td>${data.phone}</td>
                <td>${data.job}</td>
                <td>${data.created_at}</td>
            </tr>
        
            `;
        });
        tableBody.innerHTML=contenido;
    }catch(ex){
        alert(ex)
    }
};

// función para ejecutar cuando se cargue la pantalla
window.addEventListener("load", async()=>{
    await initDataTable();
});