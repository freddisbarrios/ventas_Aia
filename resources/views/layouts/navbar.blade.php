
<style>
    .menu:hover>ul{
        display: block;
    }
</style>

<header class=" bg-green-800 h-40 w-auto ">
    <nav class="flex justify-between w-auto items-center">
        <div class="">
            <a href="{{route('view.index')}}"><img 
                class="rounded-xl h-30 w-32 ml-2 mb-2pt-2 hover:opacity-80"                  
                
                src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiDRG-c12DxYow8ZkNSdHHnAvTskbVUdsD3ZmOwg2Rgm1m9Xy5ERqq9iT1Npfjuyr9065UTNsxMqoHpBIk-TSJjWR2d5vV1Zm6S9XMiJwUQrYBddoyyjxmZE6X-Okf5MHklUuDe1P3IpvMyKtrQcPnhFDJUw6d4404ZJaJCLIc1Y2naQy1xDOC-8dcNcYI/s222/logo%20aia.png"
                alt="logo AIA" ></a>
            
            
            <h1 class="text-white font-light text-xl mt-0">Constructora AIA</h1>
        </div>

        <div class="text-white hover:text-blue-200 text-xl"><a href="https://www.aia.com.co/nuestra-empresa/">¿Quienes somos?</a></div>           
        
        <div >
            <ul>
                <li  class=" menu text-white  text-xl m-auto" ><a href="">Servicios</a>
                    <ul  class="hidden  relative  right-15 top-2 text-base">
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a  href="{{route('diseño.dis')}}">Diseño</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="{{route('arquitectura.arq')}}">Arquitectura</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="{{route('construccion.constr')}}">Construcción</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl "><a href="">Proyecto</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
       
        
                       
        <div class="">
            <ul>
                
                <li class="menu text-white  text-xl m-auto  "><a href="">Ventas</a>
                    <ul  class="hidden  relative  right-15 top-2 text-base" >
                        <li  class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl "><a href="">Apartamentos</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="">Casas</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="">Oficinas</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="">Bodegas</a></li>
                        <li class="text-blue-300 hover:text-black transition-opacity hover:border bottom-2 hover:text-xl"><a href="">Otros</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div >
            <ul>
                <li class="menu text-white  text-xl mr-6"><a  href="">Posventas </a>
                    <ul  class="hidden  relative  right-15 top-2 text-base">
                        <li class="text-blue-300 hover:text-white transition-opacity hover:border bottom-2 hover:text-xl"><a href="{{'view(login)'}}">Iniciar Sesion</a></li>
                        <li class="text-blue-300 hover:text-white transition-opacity hover:border bottom-2 hover:text-xl"><a href="">Registrarse</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
    
</header>
