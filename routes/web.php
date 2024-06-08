<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Employee;
use App\Http\Controllers\Calender;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\Calenders;
use App\Models\Chaffeur;
use App\Models\Cadre;
use App\Models\Responsables;
use App\Models\Ouvrier;
use App\Models\Mecanicien;
use App\Models\Vehicule;
use App\Models\AttrAffect;
use App\Models\Reports;
use App\Models\Fournisseur;
use App\Models\PieceRechangeNeuf;
use App\Models\PieceRechange;
use App\Models\Facturation;
use App\Models\Entretien;

//piece occassion
use App\Models\LigneBonRet;
use App\Models\BonRet;
use App\Models\PieceRechOcc;
//vidange
use App\Models\FournisseurVidange;
use App\Models\ProduitVidange;
use App\Models\LigneFactureVidange;
use App\Models\FactureVidange;
//carburant
use App\Models\LigneFacCarburant;
use App\Models\Carburant;
use App\Models\FactureCarburant;

//final 
use App\Models\Vidange;
use App\Models\LigneVidanges;
use App\Models\DemandeTraveaux;



use Carbon\Carbon;
use App\Http\Requests\StoreEmployeeChauffeur;
use App\Http\Requests\StoreCadres;
use App\Http\Requests\StoreCheffeur;
use App\Http\Requests\StoreResponsable;
use App\Http\Requests\StoreOuvrier;
use App\Http\Requests\StoreVehiculeCreate;
use App\Http\Requests\UpdateVehiculeRequest;
use App\Http\Requests\StoreReports;
use App\Http\Requests\UpdateReport;
use App\Http\Requests\StoreFournisseur;
use App\Http\Requests\UpdateFourniseur;
use App\Http\Requests\StorePieceRechangeNeuf;
use App\Http\Requests\StorePieceRechange;
use App\Http\Requests\UpdatePieceRechange;
use App\Http\Requests\UpdateEntretien;
use App\Http\Requests\UpdatePieceRechangeNeuf;
use App\Http\Requests\StoreFournisseurVidange;
use App\Http\Requests\UpdateFournisseurVidange;
use App\Http\Requests\StoreProduitVidange;
use App\Http\Requests\UpdateProduitVidange;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect("/","login");


route::get("/redirects",[HomeController::class,"index"]);


//etat_ts
route::post("/calender/{id_employee}/{date}",function(Employees $employee,$id_employee,Request $request,$date) {

    $employees = Employees::all();
    $id=  $id_employee;
    $dato_in_callender = Calenders::where([
        'date' => $date,
        'id_employee' => $id,
        ])->get();
   
    
    $calender = Calenders::where([
        'id_employee' => $id])->get();
    if(count($dato_in_callender)===0){
        Calenders::create([
            'id_employee' => $id,
            'date' => $date,
            'etat_presence' =>$request->type ,
        ]);
    }
     

    return view('employee.show', compact('employee',"calender","id"));

});

route::get("/rechercher",function(Request $request ){
    
    if($request->type=="cadre"){
           $cadres = Cadre::all();
           $a=array();
        
              
        
           for($i=0;$i<count($cadres);$i++){
                $s = Employees::where([
                    'matricule' => $cadres[$i]->matricule])->get();
            $global = array(
                "matricule" => $s[0]["matricule"],
                "nom" => $s[0]["nom"],
                "prenom" =>  $s[0]["prenom"],
                "data_naissance" =>$s[0]["data_naissance"],
                "adresse"=>$s[0]["adresse"],
                "tel" => $s[0]["tel"],
                "grs" => $cadres[$i]["grs"],
                "miss_c" => $cadres[$i]["miss_c"],
            );
            array_push($a,$global);
             
            }
           
            $jsio = json_encode($a);
    }
    else if($request->type=="chauffeur"){
        $chauffeur = Chaffeur::all();
        $a=array();
        for($i=0;$i<count($chauffeur);$i++){
             $s = Employees::where([
                 'matricule' => $chauffeur[$i]->matricule])->get();
         $global = array(
             "matricule" => $s[0]["matricule"],
             "nom" => $s[0]["nom"],
             "prenom" =>  $s[0]["prenom"],
             "data_naissance" =>$s[0]["data_naissance"],
             "adresse"=>$s[0]["adresse"],
             "tel" => $s[0]["tel"],
             "type_permis" => $chauffeur[$i]["type_permis"],
          
         );
         array_push($a,$global);
          
         }
        
         $jsio = json_encode($a);
    }
    else if($request->type=="responsable"){
        $responsable = Responsables::all();
        $a=array();
        for($i=0;$i<count($responsable);$i++){
             $s = Employees::where([
                 'matricule' => $responsable[$i]->matricule])->get();
         $global = array(
             "matricule" => $s[0]["matricule"],
             "nom" => $s[0]["nom"],
             "prenom" =>  $s[0]["prenom"],
             "data_naissance" =>$s[0]["data_naissance"],
             "adresse"=>$s[0]["adresse"],
             "tel" => $s[0]["tel"],
             "miss_r" => $responsable[$i]["miss_r"],
          
         );
         array_push($a,$global);
          
         }
        
         $jsio = json_encode($a);
    }
    else if($request->type=="mécanicien"){
        $mecanicien = Mecanicien::all();
        $a=array();
        for($i=0;$i<count($mecanicien);$i++){
             $s = Employees::where([
                 'matricule' => $mecanicien[$i]->matricule])->get();
         $global = array(
             "matricule" => $s[0]["matricule"],
             "nom" => $s[0]["nom"],
             "prenom" =>  $s[0]["prenom"],
             "data_naissance" =>$s[0]["data_naissance"],
             "adresse"=>$s[0]["adresse"],
             "tel" => $s[0]["tel"],
       
          
         );
         array_push($a,$global);
          
         }
        
         $jsio = json_encode($a);
    }
    else if($request->type=="ouvrier"){
        $ouvrier = Ouvrier::all();
        $a=array();
        for($i=0;$i<count($ouvrier);$i++){
             $s = Employees::where([
                 'matricule' => $ouvrier[$i]->matricule])->get();
         $global = array(
             "matricule" => $s[0]["matricule"],
             "nom" => $s[0]["nom"],
             "prenom" =>  $s[0]["prenom"],
             "data_naissance" =>$s[0]["data_naissance"],
             "adresse"=>$s[0]["adresse"],
             "tel" => $s[0]["tel"],
       
          
         );
         array_push($a,$global);
          
         }
        
         $jsio = json_encode($a);
    }
   $req = $request->type;
    return view("showInformation",compact("jsio","req"));
});



// else if($type=="mécanicien"){
//     Mecanicien::create([
//         'matricule' => $request->matricule,
//     ]);
// }
route::post("/ajouter/{type}",function($type,StoreEmployeeChauffeur $requestemployee,
StoreCheffeur $requestcheffeur
){
    
            //create in employee and chauffeur
            Employees::create($requestemployee->validated());
            Chaffeur::create($requestcheffeur->validated());            
            return redirect()->route('employee.index');
          
        
      
});
route::post("/ajouter_cadre/{type}",function($type,StoreEmployeeChauffeur $requestemployee,
StoreCadres $requestcadre
){
    
            //create in employee and chauffeur
            Employees::create($requestemployee->validated());
            Cadre::create($requestcadre->validated());         
            return redirect()->route('employee.index');
          
        
      
});

route::post("/ajouter_responsable/{type}",function($type,StoreEmployeeChauffeur $requestemployee,
StoreResponsable $requestreponsable
){
    
            //create in employee and chauffeur
            Employees::create($requestemployee->validated());
            Responsables::create($requestreponsable->validated());         
            return redirect()->route('employee.index');
          
        
      
});

route::post("/ajouter_ouvrier/{type}",function($type,StoreEmployeeChauffeur $requestemployee,
StoreOuvrier $requestouvrier
){
    
            //create in employee and chauffeur
            Employees::create($requestemployee->validated());
            Ouvrier::create($requestouvrier->validated());         
            return redirect()->route('employee.index');
});

route::post("/ajouter_mecanicien/{type}",function($type,StoreEmployeeChauffeur $requestemployee,
StoreOuvrier $requestouvrier
){
    
            //create in employee and chauffeur
            Employees::create($requestemployee->validated());
            Mecanicien::create($requestouvrier->validated());         
            return redirect()->route('employee.index');
});

route::get("/create",function(Request $request){
    $type =  $request->type; 
    return view("cadre",compact("type"));
});

route::get('/vehicule',function(){
    $vehicules = Vehicule::all();
   
    return view("vehicule",compact("vehicules"));
});

route::get("/vehicule_creation_form",function(){
    return view("createVehicule");
});


route::post("/create_vehicule",function(StoreVehiculeCreate $requestvihecule){
    Vehicule::create($requestvihecule->validated());
    return redirect("vehicule");
});

route::get("/edit_vehicule/{id}",function($id){
    $vehicule = Vehicule::where([
        'id' => $id])->get();
    $single_vihicule =  $vehicule[0];
  
    return view("editVehicule",compact("single_vihicule"));
});

route::put("/update_vehicule/{id}",function ($id,UpdateVehiculeRequest $request, Vehicule $vehicule)
{
    echo "hi";
    Vehicule::where('id',$id)->update($request->validated());

    return redirect("vehicule");
});

route::get("/vehicule_aff/{id}",function($id){
    $cadres = Cadre::all();
    $all_affected = AttrAffect::where([
    'code_veh' => $id,
    "status" =>"1"
    ])->get();
    $affectp_table =  AttrAffect::where([
        'code_veh' => $id
        ])->get();
    $isAffected = count($all_affected)>0 ; 
        
    return view("affectVehicule",compact("cadres","id","isAffected","affectp_table"));

});

route::post("/create_affect/{id}",function($id,Request $request){
    $date = Carbon::now();
    $cadres = Cadre::all();

    AttrAffect::create([
        'code_veh' => $id,
        'matricule' => $request->matricule,
        'date_debut' => $date,
        'date_fin' => $date,
        "status" => true
    ]);
    $all_affected = AttrAffect::where([
        'code_veh' => $id,
        "status" =>"1"
        ])->get();
        $isAffected = count($all_affected)>0 ;
        $affectp_table =  AttrAffect::where([
            'code_veh' => $id
            ])->get();
    return view("affectVehicule",compact("cadres","id","isAffected","affectp_table"));
});

route::put("/update_affect/{id}",function($id){
    $date = Carbon::now();
    $cadres = Cadre::all();
    AttrAffect::where('code_veh',$id)->update([
        'date_fin' => $date,
        "status" => false
    ]);
   
    $all_affected = AttrAffect::where([
        'code_veh' => $id,
        "status" =>"1"
        ])->get();

        $isAffected = count($all_affected)>0 ;
        $affectp_table =  AttrAffect::where([
            'code_veh' => $id
            ])->get();
            return view("affectVehicule",compact("cadres","id","isAffected","affectp_table"));
});

route::get("/rechercher_vehicule",function(Request $request){
 
    $code_vh=$request->code_veh;
    if(empty($code_vh)){
    
        $vehicules = Vehicule::where([
            "marq_veh" =>$request->marq_veh
            ])->get();
            error_log($request->marq_veh) ;
            return view("vehicule",compact("vehicules"));
    }else{
        $vehicules = Vehicule::where([
            'code_veh' => $code_vh,            
            "marq_veh" =>$request->marq_veh
            ])->get();
            return view("vehicule",compact("vehicules"));
    }
 
   
    
});

route::get("/rapport",function(){
    $reports =Reports::all();
    return view("rapport",compact("reports"));
});

route::get("/rapport_form",function(){
    $mecanicien = Mecanicien::all();
    $vehicules = Vehicule::all() ;
    $reports =Reports::all();
    return view("createRapport",compact("mecanicien","vehicules",));
});

route::post("/create_repport",function(StoreReports $requestrapports){
    Reports::create($requestrapports->validated());
    return redirect("rapport");
});
route::get("/edit_rapport/{id}",function($id){
    $report = Reports::where([
        'id' => $id])->get();
    $single_report =  $report[0];
    $mecanicien = Mecanicien::all();
    $vehicules = Vehicule::all() ;
    return view("editReport",compact("single_report","mecanicien",
"vehicules"));
});

route::put("/update_report/{id}",function ($id,UpdateReport $request)
{
    echo "hi";
    Reports::where('id',$id)->update($request->validated());

    return redirect("rapport");
});


route::get("/print/{id}",function($id){
    $report = Reports::where([
        'id' => $id])->get();
    $single_report =  $report[0];
    $a = $single_report->code_rap;
    $b = ".pdf";
    $c = $a . " " . $b;
    $pdf = PDF::loadView('invoice',compact("single_report"));
    return $pdf->download($c);
});

route::get("/print_entretien/{code_entretien}/{code_vihicule}/{km_vehicule}/{avis}/{date_entretien}",function(
$code_entretien,$code_vihicule,$km_vehicule,$avis,$date_entretien
){
    $specificFacture = Entretien::where([
        'code_entretien' => $code_entretien])->get();
        $a = $code_entretien;
        $b = ".pdf";
        $c = $a . " " . $b;
        $pdf = PDF::loadView('invoice_entretien',compact("specificFacture","code_entretien","code_vihicule","km_vehicule","avis","date_entretien"));
        return $pdf->download($c);


});


route::get("/print_facture/{code_facture}/{date_facture}",function($code_facture,$date_facture){
    $specificFacture = Facturation::where([
        'code_facture' => $code_facture])->get();
        $a = $code_facture;
        $b = ".pdf";
        $c = $a . " " . $b;
        $pdf = PDF::loadView('invoice_facture',compact("specificFacture","code_facture","date_facture"));
        return $pdf->download($c);
});



route::get("/piece_rechange",function(){
    $facturations = Facturation::select('code_facture','code_frs','date_facture')->distinct()->get();
   
    return view("piece_rechange",compact("facturations"));
});

route::get("/fournisseur",function(){
    $Fournisseur = Fournisseur::all(); 
    return view("fournisseur",compact("Fournisseur"));
});

route::get("/create_fournisseur",function(){
    return view("create_fournisseur");
});

route::post("/create_fornisseur_form",function(StoreFournisseur $requestFournisseur){
    
    Fournisseur::create($requestFournisseur->validated());
    return redirect("fournisseur");
});

route::get("/edit_fournisseur/{id}",function($id){
    $fournisseur = Fournisseur::where([
        'id' => $id])->get()[0];
    return view("edit_fournisseur",compact("fournisseur"));
});

route::put("/edit_fournisseur_form/{id}",function($id,UpdateFourniseur $request){
    Fournisseur::where('id',$id)->update($request->validated());
    return redirect("fournisseur");
});



route::get("/rechercher_fournisseur",function(Request $request){
    $code_frs=$request->code_frs;
    $nom_frs = $request->nom_frs;
    if(empty($nom_frs) && !empty($code_frs)){
        $Fournisseur = Fournisseur::where([
            'code_frs' => $code_frs])->get();
    }else if(!empty($nom_frs) && empty($code_frs)){
        $Fournisseur = Fournisseur::where([
            'nom_frs' => $nom_frs])->get();
    }
    else if(empty($nom_frs) && empty($code_frs)){
        $Fournisseur = Fournisseur::all();
    }else{
        $Fournisseur = Fournisseur::where([
            'nom_frs' => $nom_frs,
            'code_frs' => $code_frs])->get();
    }
    return view("fournisseur",compact("Fournisseur"));
});

route::get("/piece_rechange_interface_globale",function(){
    $piece_rechange = PieceRechange::all();
    return view("piece_rechange_interface_globale",compact("piece_rechange"));
});

route::get("/create_piece_rechange_form",function(){
    return view("create_piece_rechange_form");
});

route::get("/facturation",function(){
    $fournisseur = Fournisseur::all();
    $codePiece = PieceRechange::all();
    return view("facturation",compact("fournisseur","codePiece"));
});

route::post("/facture/{code_facture}/{code_frs}",function($code_facture,$code_frs,Request $request){
    error_log("code facteur est ");
    error_log($code_facture);
    error_log("code fournisseur est ");
    error_log($code_frs);
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       'model_pie.*'  => 'required',
       'qte_pie.*'  => 'required',
       'prix.*'  => 'required',
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $code_pie = $request->code_pie;
      $model_pie = $request->model_pie;
      $qte_pie = $request->qte_pie;
      $prix = $request->prix;
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'code_pie' => $code_pie[$count],
        'model_pie'  => $model_pie[$count],
        'qte_pie' => $qte_pie[$count],
        'prix'  => $prix[$count],
        'code_facture'=>$code_facture,
        'code_frs' =>$code_frs
       );
       $piece_rechange = PieceRechangeNeuf::where([
        'code_pie' => $code_pie[$count]])->get()[0];
        PieceRechangeNeuf::where('code_pie', $code_pie[$count])
    ->update([
           'qty_pie' => $piece_rechange->qty_pie+$qte_pie[$count]
    ]);
       $insert_data[] = $data; 
      }

      Facturation::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});

route::post("/entretien_facture/{code_entretien}/{code_vh}/{km_vehicule}/{avis}",function($code_entretien,$code_vh
,$km_vehicule,$avis,Request $request){
    error_log("code Entretien est ");
    error_log($code_entretien);
    error_log("code fournisseur est ");
    error_log($code_vh);
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       'model_pie.*'  => 'required',
       'qte_pie.*'  => 'required',
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $code_pie = $request->code_pie;
      $model_pie = $request->model_pie;
      $qte_pie = $request->qte_pie;
 
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'code_pie' => $code_pie[$count],
        'model_pie'  => $model_pie[$count],
        'qte_pie' => $qte_pie[$count],
        'code_entretien'=>$code_entretien,
        'code_vh' =>$code_vh,
        'km_vehicule'=>$km_vehicule,
        'avis'=>$avis
       );
       $piece_rechange = PieceRechangeNeuf::where([
        'code_pie' => $code_pie[$count]])->get()[0];
        PieceRechangeNeuf::where('code_pie', $code_pie[$count])
    ->update([
           'qty_pie' => $piece_rechange->qty_pie-$qte_pie[$count]
    ]);
       $insert_data[] = $data; 
      }
      
      Entretien::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});




route::get("/piece_de_occasion",function(){
    $entretiens = Entretien::select('code_entretien','code_vh','km_vehicule','avis','date_facture')->distinct()->get();

    return view("pieceOccassion",compact("entretiens"));
});

route::get("/create_piece_occassion",function(){
    $vihicules = Vehicule::all();
    $codePiece = PieceRechange::all();
    return view("create_piece_occation",compact("vihicules","codePiece"));
});





route::post("/create_piece_rechange",function(StorePieceRechange $requestpiecerechange,
StorePieceRechangeNeuf $requestPecerechnageNeuf
){
    PieceRechange::create($requestpiecerechange->validated());
    PieceRechangeNeuf::create($requestPecerechnageNeuf->validated());
    return redirect("piece_rechange_interface_globale");
});




route::get("/edit_piece_rechange_form/{code_pie}",function($code_pie){
    $qty_pie = PieceRechangeNeuf::where([
        'code_pie' => $code_pie])->get()[0];
    $pieceRechange = PieceRechange::where([
        'code_pie' => $code_pie])->get()[0];
    return view("editPieceRechange",compact("pieceRechange","qty_pie"));
});

route::put("/form_test/{code_pie}",function($code_pie,UpdatePieceRechangeNeuf $request){
    PieceRechangeNeuf::where('code_pie',$code_pie)->update($request->validated());
    return redirect("piece_rechange_interface_globale");
});


route::get("/getFactureInformation/{code_facture}/{date_facture}",function($code_facture,$date_facture){
    $specificFacture = Facturation::where([
        'code_facture' => $code_facture])->get();
    
    return view("getFactureInformation",compact("specificFacture","code_facture","date_facture"));
});

route::get("/getEntretienInformation/{code_entretien}/{code_vh}/{km_vehicule}/{avis}/{date_entretien}",function($code_entretien,
$date_entretien,$code_vh,$km_vehicule,$avis){
    $specificFacture = Entretien::where([
        'code_entretien' => $code_entretien])->get();
    
    return view("getEntretienInformation",compact("specificFacture","code_entretien","code_vh","km_vehicule","avis","date_entretien"));
});

route::get("/modifier_entretien/{code_entretien}/{code_vh}/{km_vehicule}/{avis}/{date_entretien}",function($code_entretien
,$code_vh,$km_vehicule,$avis,$date_entretien
){
    $specificFacture = Entretien::where([
        'code_entretien' => $code_entretien])->get();
        return view("modifierEntretien",compact("specificFacture","code_entretien","code_vh","km_vehicule","avis","date_entretien"));
});

route::put("/update_entretien/{code_entretien}",function($code_entretien,UpdateEntretien $request){
    Entretien::where('code_entretien',$code_entretien)->update($request->validated());

    return redirect("piece_de_occasion");
});

// table 1 in piece occassion 
//PIECE_RECH_OCC
// attributes qte_piece_occ

//table 2 in piece occassion 

// BON_RET_PIE_OCC
// +N°_BR +DATE_BR

//table 3 in piece d occassion 
//LIGNE_BON_RET
//attribute +QTE_PIE_OCC_BR

route::get("/occassion_piece",function(){
    $ocassion = LigneBonRet::select('N°_BR')->distinct()->get();
    $bonret = BonRet::all();
    // ->where('ligne_bon_rets.N°_BR', '=', $N_br)
   $count = count($bonret);
    return view("occassion_pieces",compact("ocassion","bonret","count"));
});

route::get("/create_piece_occassion_real",function(){
    $codePiece = PieceRechange::all(); 
    return view("createPieceOccassionReal",compact("codePiece"));
});

route::post("/pieceOccassion_facture/{N_br}",function($N_br,Request $request){
    error_log($N_br);
    if($request->ajax())
    {
     $rules = array(
      'code_pie.*'  => 'required',
      'qte_pie.*'  => 'required',
     );

     $error = Validator::make($request->all(), $rules);
     if($error->fails())
     {
      return response()->json([
       'error'  => $error->errors()->all()
      ]);
     }

     $code_pie = $request->code_pie;
   
     $qte_pie = $request->qte_pie;
    
     for($count = 0; $count < count($code_pie); $count++)
     {
      $data = array(
       'code_piece' => $code_pie[$count],
       'QTE_PIE_OCC_BR' => $qte_pie[$count],
       'N°_BR'=>$N_br,
      );
      $piece_rechange = PieceRechOcc::where([
       'code_piece' => $code_pie[$count]])->get();
        
       if(count($piece_rechange)==0){
           //qte_piece_occ
           echo("just add");
           PieceRechOcc::create([
            'code_piece' => $code_pie[$count],
            'qte_piece_occ' =>$qte_pie[$count] ,
        ]);
       }else{
        $piece_rechange = PieceRechOcc::where([
            'code_piece' => $code_pie[$count]])->get()[0];
        error_log("exist");
        error_log($piece_rechange);
        PieceRechOcc::where('code_piece', $code_pie[$count])
        ->update([
               'qte_piece_occ' => $piece_rechange->qte_piece_occ+$qte_pie[$count]
        ]);
       }
      
      $insert_data[] = $data; 
     }
     
     LigneBonRet::insert($insert_data);
     BonRet::create([
        'N°_BR' => $N_br,
    ]);
    
     return response()->json([
        'success'  => 'Data Added successfully.'
       ]);
    }
});

route::get("/afficherPieceRechange/{N_br}",function($N_br){
    $specificFacture  = LigneBonRet::where([
        'N°_BR' => $N_br])->get();
    $specificdate = BonRet::where([
        'N°_BR' => $N_br])->get()[0];
    $count = count( $specificFacture);
    
    $pieces = LigneBonRet::join('piece_rech_occs', 'ligne_bon_rets.code_piece', '=', 'piece_rech_occs.code_piece')->where('ligne_bon_rets.N°_BR', '=', $N_br)->get();
     
 
    return view("getInfoPieceOcation",compact("N_br","specificFacture","specificdate","count","pieces"));

});

route::get("/imprimer_piece_occassion/{N_br}/{date_facture}",function($N_br,$date_facture){
 
    $specificFacture  = LigneBonRet::where([
        'N°_BR' => $N_br])->get();
    $specificdate = BonRet::where([
        'N°_BR' => $N_br])->get()[0];
    $count = count( $specificFacture);
    
    $pieces = LigneBonRet::join('piece_rech_occs', 'ligne_bon_rets.code_piece', '=', 'piece_rech_occs.code_piece')->where('ligne_bon_rets.N°_BR', '=', $N_br)->get();
        $a = $N_br;
        $b = ".pdf";
        $c = $a . " " . $b;
        $pdf = PDF::loadView('invoice_piece_occassion',compact("N_br","specificFacture","specificdate","count","pieces","date_facture"));
        return $pdf->download($c);
});

route::get("/piece_occasion_join_by_piece_rechange",function(){
    $pieces = PieceRechange::join('ligne_bon_rets', 'ligne_bon_rets.code_piece', '=', 'piece_rechanges.code_pie')->select('code_piece',"lib_pie","marq_pie","modele_pie","type_pie","QTE_PIE_OCC_BR")->distinct()->get();
    $pieces_rechange = PieceRechangeNeuf::join('ligne_bon_rets', 'ligne_bon_rets.code_piece', '=', 'piece_rechange_neufs.code_pie')->select('code_pie',"qty_pie")->distinct()->get();
   
    $count = count($pieces);
    return view("PieceOccassionJoinPieceRechange",compact("pieces","count","pieces_rechange"));
});

route::get("/produits_vidange",function(){
    $facture = FactureVidange::select('code_frs','Code_facture','DATE_Facture_vidange')->distinct()->get();    
   
    return view("produitsVidangeResponsable",compact("facture"));
});

route::get("/fournisseur_produits_vidange",function(){
    $fournisseur = FournisseurVidange::all();
    return view("fournisseurProduitsVidange",compact("fournisseur"));
});

route::get("/create_fournisseur_produit_vidange",function(){
    return view("createFournisseurProduitVidange");
});

route::post("/create_fornisseur_vidange_form",function(StoreFournisseurVidange $requestFournisseur){
    
    FournisseurVidange::create($requestFournisseur->validated());
    return redirect("fournisseur_produits_vidange");
});

route::get("/edit_fournisseur_vidange/{id}",function($id){
    $fournisseur = FournisseurVidange::where([
        'id' => $id])->get()[0];
    return view("editFournisseurVidange",compact("fournisseur"));
});

route::put("/edit_fournissuer_form_vidange/{id}",function($id,UpdateFournisseurVidange $request){
    FournisseurVidange::where('id',$id)->update($request->validated());
    return redirect("fournisseur_produits_vidange");
});

route::get("/produit_vidange_global",function(){
    $produits = ProduitVidange::all();

    return view("ProduitVidangeGlobal",compact("produits"));
});

route::get("/create_produit_vidange",function(){
    return view("createProduitVidange");
});

route::post("/create_produit_vidange_form",function(StoreProduitVidange $requestproduit){
    ProduitVidange::create($requestproduit->validated());
    return redirect("produit_vidange_global"); 
});
route::get("/editProduitVidange/{id}",function($id){
    $fournisseur = ProduitVidange::where([
        'id' => $id])->get()[0];
    
    return view("editProduitVidange",compact("fournisseur"));
});

// UpdateProduitVidange

route::put("/editProduitVidangeForm/{id}",function($id,UpdateProduitVidange $request){
    ProduitVidange::where('id',$id)->update($request->validated());
    return redirect("produit_vidange_global"); 
});

route::get("/addFactureProduitVidange",function(){
    $fournisseur = FournisseurVidange::all();
    $codePiece = ProduitVidange::all();
    return view("AddFactureProduitVidange",compact("fournisseur","codePiece"));
});

route::post("/facture_vidange/{code_facture}/{code_frs}",function($code_facture,$code_frs,Request $request){
    error_log("code facteur est ");
    error_log($code_facture);
    error_log("code fournisseur est ");
    error_log($code_frs);
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       'qte_pie.*'  => 'required',
       'prix.*'  => 'required',
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }
      
      $code_pie = $request->code_pie;
      $qte_pie = $request->qte_pie;
      $prix = $request->prix;
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'Code_prd_vid' => $code_pie[$count],
        'Qte_prd_vid_fac' => $qte_pie[$count],
        'Code_facture'  => $code_facture ,
        'Prix_prd_vid_fac'=>$prix[$count],
        
       );
       $piece_rechange = ProduitVidange::where([
        'Code_prd_vid' => $code_pie[$count]])->get()[0];
        ProduitVidange::where('Code_prd_vid', $code_pie[$count])
    ->update([
           'QTE_STK_Prd' => $piece_rechange->QTE_STK_Prd+$qte_pie[$count]
    ]);
       $insert_data[] = $data; 
      }

      LigneFactureVidange::insert($insert_data);
      FactureVidange::create([
        "code_frs"=>$code_frs,
        "Code_facture"=>$code_facture
      ]);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});

route::get("/getfactureVidangeInformation/{code_facture}/{code_frs}/{date_facture}",function($code_facture,
$date_facture,$code_frs){
   
   
    $specificFacture = LigneFactureVidange::where([
        'Code_facture' => $code_facture])->get();
        $specificFacture  = LigneFactureVidange::where([
            'Code_facture' => $code_facture])->get();
        $count = count( $specificFacture);
        
        $pieces = LigneFactureVidange::join('produit_vidanges', 'ligne_facture_vidanges.Code_prd_vid', '=', 'produit_vidanges.Code_prd_vid')->where('ligne_facture_vidanges.Code_facture', '=', $code_facture)->get();
  
    return view("getfactureVidangeInformation",compact("pieces","count","specificFacture","code_facture","code_frs","date_facture"));
});

route::get("/print_facture_vidange/{code_facture}/{code_frs}/{date_facture}",function(
    $code_facture,$code_frs,$date_facture
    ){
        $specificFacture  = LigneFactureVidange::where([
            'Code_facture' => $code_facture])->get();
        $count = count( $specificFacture);
        
        $pieces = LigneFactureVidange::join('produit_vidanges', 'ligne_facture_vidanges.Code_prd_vid', '=', 'produit_vidanges.Code_prd_vid')->where('ligne_facture_vidanges.Code_facture', '=', $code_facture)->get();
            $a = $code_facture;
            $b = ".pdf";
            $c = $a . " " . $b;
            $pdf = PDF::loadView('invoice_prduit_vidange',compact("count","pieces","specificFacture","code_facture","code_frs","date_facture"));
            return $pdf->download($c);
    
    
    });


    route::get("/carburant_global",function(){
    $facture = FactureCarburant::all();    
    
    return view("carburantGlobal",compact("facture"));
});

route::get("create_facture_carburant",function(){
    return view("create_facture_carburant");
});

//LigneFacCarburant
//Carburant
//FactureCarburant
route::post("/facture_carburant/{code_facture}/{code_frs}",function($code_facture,$code_frs,Request $request){
    error_log("code facteur est ");
    error_log($code_facture);
  
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       
       'qte_pie.*'  => 'required',
       'prix.*'  => 'required',
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $code_pie = $request->code_pie;
      $qte_pie = $request->qte_pie;
      $prix = $request->prix;
     $totale_prix = 0;
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'TYPE_CARB' => $code_pie[$count],
        'NB_LTR_F_C' => $qte_pie[$count],
        'PRIX_LTR'  => $prix[$count],
        'N°_FAC_C'=>$code_facture,
       );
       $totale_prix+=$prix[$count];
     
       $insert_data[] = $data; 
       $data_carburants=[
        'FRS_CARB'=>$code_frs,
        'NB_LITRES_STK'=>$qte_pie[$count],
        'TYPE_CARB'=>$code_pie[$count]
       ];
       $insert_carburant_data[]= $data_carburants;
      }

      LigneFacCarburant::insert($insert_data);
      Carburant::insert($insert_carburant_data);
      
      FactureCarburant::create([
        'N°_FAC_C'=>$code_facture,
'MNT_T_FAC_C'=>$totale_prix
      ]);

      
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});


route::get("/getCarburantInformation/{code_facture}/{date_facture}/{mountant}",function($code_facture,
$date_facture,$mountant){ 
        $specificFacture  = LigneFacCarburant::where([
            'N°_FAC_C' => $code_facture])->get();
        $count = count( $specificFacture);
        
   
  
    return view("getCarburantInformation",compact("count","specificFacture","code_facture","mountant","date_facture"));
});

route::get("/print_carburants/{code_facture}/{date_facture}/{mountant}",function(
    $code_facture,$mountant,$date_facture
    ){
        $specificFacture  = LigneFacCarburant::where([
            'N°_FAC_C' => $code_facture])->get();
        $count = count( $specificFacture);
        
            $a = $code_facture;
            $b = ".pdf";
            $c = $a . " " . $b;
            $pdf = PDF::loadView('invoice_carburant',compact("count","specificFacture","code_facture","mountant","date_facture"));
            return $pdf->download($c);
    
    
    });


    //add piece occassion

    //table piece_rech_occ code_piece  qte_piece_occ total qty table 

//table bon_ret_pie_occ 
//N°_BR input add 

route::get("/vidange",function(){
    $vidanges = Vidange::all();

    return view("vidange",compact("vidanges"));
});

route::get("/create_vidange",function(){
    $vehicules = Vehicule::all();
    $produit_vidanges = ProduitVidange::all();
    return view("createVidange",compact("vehicules","produit_vidanges"));
});

//LigneVidanges
//Vidange
route::post("/facture_vidange_finale/{code_facture}/{code_vh}/{km_veh}",function(
    $code_facture,$code_vh,$km_veh,Request $request){
    
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       'qte_pie.*'  => 'required',
       
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }
      
      $code_pie = $request->code_pie;
      $qte_pie = $request->qte_pie;
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'Code_prd_vid' => $code_pie[$count],
        'QTE_PRD_VID' => $qte_pie[$count],
        'CODE_VID'  => $code_facture ,
        
       );
       $piece_rechange = ProduitVidange::where([
        'Code_prd_vid' => $code_pie[$count]])->get()[0];
        ProduitVidange::where('Code_prd_vid', $code_pie[$count])
    ->update([
           'QTE_STK_Prd' => $piece_rechange->QTE_STK_Prd-$qte_pie[$count]
    ]);
       $insert_data[] = $data; 
      }

      LigneVidanges::insert($insert_data);
      Vidange::create([
        "CODE_VID"=>$code_facture,
        "code_veh"=>$code_vh,
        "KM_VEH_VID"=>$km_veh,
      ]);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});
//getVidangeInformation
route::get("/getVidangeInformation/{code_facture}/{code_vh}/{km}/{date_vidange}",function($code_facture,
$code_vh,$km,$date_vidange){ 
        $specificFacture  = LigneVidanges::where([
            'CODE_VID' => $code_facture])->get();
        $count = count( $specificFacture);
        $pieces = LigneVidanges::join('produit_vidanges', 'ligne_vidanges.Code_prd_vid', '=', 'produit_vidanges.Code_prd_vid')->where('ligne_vidanges.CODE_VID', '=', $code_facture)->get();
       
        
   
  
    return view("getVidangeInformation",compact("count","pieces","code_facture","code_vh","km","date_vidange"));
});

//getDemandeTraveauxInformation
route::get("/getDemandeTraveauxInformation/{code_facture}/{code_matricule}/{date_vidange}",function($code_facture,
$code_matricule,$date_facture){ 
        $specificFacture  = DemandeTraveaux::where([
            'CODE_DEM' => $code_facture])->get();
        $count = count( $specificFacture);
  
    return view("getDemandeTraveauxInformation",compact("count","specificFacture","code_facture","code_matricule","date_facture"));
});


route::get("/print_final_produit_vidange/{code_facture}/{code_vh}/{km}/{date_vidange}",function(
    $code_facture,$code_vh,$km,$date_vidange
    ){
        $specificFacture  = LigneVidanges::where([
            'CODE_VID' => $code_facture])->get();
        $count = count( $specificFacture);
        $pieces = LigneVidanges::join('produit_vidanges', 'ligne_vidanges.Code_prd_vid', '=', 'produit_vidanges.Code_prd_vid')->where('ligne_vidanges.CODE_VID', '=', $code_facture)->get();

            $a = $code_facture;
            $b = ".pdf";
            $c = $a . " " . $b;
            $pdf = PDF::loadView('invoiceVidangeFinal',compact("count","pieces","specificFacture","code_facture","code_vh","km","date_vidange"));
            return $pdf->download($c);
    
    
    });

//table ligne_bon_re 
//code_piece foreignkey   N°_BR foreignkey    QTE_PIE_OCC_BR 

//print_demandeFacture
route::get("/print_demandeFacture/{code_facture}/{code_matricule}/{date_facture}",function(
    $code_facture,$code_matricule,$date_facture
    ){
        $specificFacture  = DemandeTraveaux::where([
        'CODE_DEM' => $code_facture])->get();
        
     

        $count = count( $specificFacture);

            $a = $code_facture;
            $b = ".pdf";
            $c = $a . " " . $b;
            $pdf = PDF::loadView('invoiceDemandeFacture',compact("count","specificFacture","code_facture","code_matricule","date_facture"));
            return $pdf->download($c);
    
    
    });



route::get("/demandeTraveauxTable",function(){
   $demande_taveaux = DemandeTraveaux::select('CODE_DEM','MATR_EMP','DATE_DEM')->distinct()->get();
    return view("demandeTraveauxTable",compact("demande_taveaux"));
});


route::get("/demanadeTraveauxGlobale",function(){
    $mecanicien = Mecanicien::all();
    $pieces_rechange = PieceRechange::all();
    return view("demanadeTraveauxGlobale",compact("mecanicien","pieces_rechange"));
});

route::post("/facture_demande_traveaux/{code_facture}/{matricule}",function(
    $code_facture,$matricule,Request $request){
    
    if($request->ajax())
     {
      $rules = array(
       'code_pie.*'  => 'required',
       'model_pie.*'  => 'required',
       
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }
      
      $code_pie = $request->code_pie;
      $model_pie = $request->model_pie;
     
      for($count = 0; $count < count($code_pie); $count++)
      {
       $data = array(
        'CODE_PIE' => $code_pie[$count],
        'MATR_EMP' =>$matricule,
        'CODE_DEM'  => $code_facture ,
        'Qte'=>$model_pie[$count]
       );
     
       $insert_data[] = $data; 
      }

      DemandeTraveaux::insert($insert_data);
    
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
});






//responsable 
//nbonretour date qty impirimer table afficher date n bonretour qtystock tableliginebonetour
	    

//vidange chef de parc  responsable de stock

//carburant chef de stock 







Route::group(['middleware' => 'auth'], function () {
    Route::resource('/employee', \App\Http\Controllers\Employee::class);

});
Route::middleware([
    'auth:sanctum',
    
    'verified'
])->get("/dashboard",[
    HomeController::class,"index"])->name("dashboard");
