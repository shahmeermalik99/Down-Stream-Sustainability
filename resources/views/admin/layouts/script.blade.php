<script src="{{ asset('admin/js/jquery.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script>
    const copyBtn = document.getElementById("cp_btn")
    $(document).ready(function() {
        $('#table_id').DataTable({
            language: {
                search: "",
                searchPlaceholder: "Search",
                  sAjaxSource : 'jsonfiledemo.txt'
            },
        });

        $("#table_id_filter label").prepend('<i class="bi bi-search"></i>')

    });
    // let options = {
    //     animation: true,
    //     title: "Copy to Cliboard"

    // }
    // copyBtn.addEventListener("click", () => {
    //     let copyText = document.getElementById("code_text");
    //     let textArea = document.createElement("textarea");
    //     textArea.value = copyText.textContent;
    //     document.body.appendChild(textArea);
    //     textArea.select();
    //     document.execCommand("Copy");
    //     textArea.remove();
    //     document.querySelector(".my-tooltip").innerHTML = "copied"

    // });

    // copyBtn.addEventListener("mouseout", () => {
    //     setTimeout(() => {
    //         document.querySelector(".my-tooltip").innerHTML = "copy to clip board"
    //     }, 300)

    // })

    // let tooltip = new bootstrap.Tooltip(copyBtn, options)
</script>
