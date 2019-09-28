<script language="JavaScript">
                    
                    function Username(nilai, pesan) {
                        var userExp = /^[a-zA-Z0-9]{5,9}$/;
                        if(nilai.value.match(userExp)) {
                            return true;
                        }
                        else {
                            alert(pesan);
                            return false;
                        }
                    }
                    
                    function Password(nilai, pesan) {
                        var passExp = /([a-z])+([A-Z0-9]+)+([\W]+)+(\d{8,})$/;
                        if(nilai.value.match(passExp)) {
                            return true;
                        }
                        else {
                            alert(pesan);
                            return false;
                        }
                    }
                    
                    function validasi() {
                        Username (document.getElementById('username'), 'False!!');
                        Password (document.getElementById('password'), 'False!!');
                    }
                </script>
