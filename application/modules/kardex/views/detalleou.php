<?php echo $this->load->view('cabecera'); ?>

<div class="aqua-panel">
    <div class="aqua-panel-header">
        <i class="modernpics icons32">r</i>
        <span class="panel-divider"></span>
            <h2>Lista de Salida
                <span></span>
            </h2>
        <div class="aqua-panel-tabs-icons pull-right">
            <a href="#" class="minimize">--</a>
            <a href="#" class="modernpics maximize">v</a>
        </div>
    </div>
    <div class="aqua-panel-content">
             <div id="user-grid" class="grid-view">
              <div>
                <div class="summary">Listado 1-2 de 2 Resultados.</div>
            </div>
            <div class="clear">
                <table class="items table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th id="user-grid_c0">
                                <a class="sort-link" href="admin10ae.html?User_sort=id">ID
                                    <span class="caret">
                                        
                                    </span>
                                </a>
                            </th>
                            <th id="user-grid_c1">
                                <a class="sort-link" href="admin81c9.html?User_sort=username">Username
                                    <span class="caret">
                                        
                                    </span>
                                </a>
                            </th>
                            <th id="user-grid_c2">
                                <a class="sort-link" href="admine744.html?User_sort=password">Password
                                    <span class="caret"></span>
                                </a>
                            </th>
                            <th id="user-grid_c3">
                                <a class="sort-link" href="admin7dd5.html?User_sort=email">Email
                                    <span class="caret">
                                        
                                    </span>
                                </a>
                            </th>
                            <th id="user-grid_c4">
                                <a class="sort-link" href="admin2084.html?User_sort=create_time">Create Time
                                    <span class="caret">
                                        
                                    </span>
                                </a>
                            </th>
                            <th class="button-column" id="user-grid_c5">&nbsp;</th>
                        </tr>
                            <tr class="filters">
                            <td>
                                <div class="filter-container">
                                    <input name="User[id]" type="text" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-container">
                                    <input name="User[username]" type="text" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-container">
                                    <input name="User[password]" type="text" maxlength="40" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-container">
                                    <input name="User[email]" type="text" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-container">
                                    <input name="User[create_time]" type="text" />
                                </div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
            <tbody>
            <tr class="odd">
                <td>161</td>
                <td>Raphaela</td>
                <td>12345678</td>
                <td>ratamiette@gmail.com</td>
                <td></td>
                <td class="button-column">
                    <a class="view" title="View" rel="tooltip" href="161.html">
                        <i class="icon-eye-open"></i>
                    </a> 
                    <a class="update" title="Update" rel="tooltip" href="update/161.html">
                        <i class="icon-pencil"></i>
                    </a> 
                    <a class="delete" title="Delete" rel="tooltip" href="delete/161.html">
                        <i class="icon-trash"></i>
                    </a>
                </td>
            </tr>
            <tr class="even">
                <td>162</td>
                <td>Chandrakanta</td>
                <td>daskldaskldj</td>
                <td>asdas@dssad.com</td>
                <td>
                    
                </td>
                <td class="button-column">
                    <a class="view" title="View" rel="tooltip" href="162.html">
                        <i class="icon-eye-open"></i>
                    </a> 
                    <a class="update" title="Update" rel="tooltip" href="update/162.html">
                        <i class="icon-pencil"></i>
                    </a> 
                    <a class="delete" title="Delete" rel="tooltip" href="delete/162.html">
                        <i class="icon-trash"></i>
                    </a>
                </td></tr>
            </tbody>
            </table>
        </div>
        <div class="clear" style="height: 30px;">
            <div class="summary">Displaying 1-2 of 2 results.</div>
        </div>
        <div class="keys" style="display:none" title="/aquablue/user/admin">
            <span>161</span>
            <span>162</span>
        </div>     
    </div>        
    </div>    
</div>


<?php echo $this->load->view('pie'); ?>