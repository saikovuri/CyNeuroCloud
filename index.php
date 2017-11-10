<?php
include("includes/header.php");
?>
<div style="background:transparent !important" class="container jumbotron padding-top-10 padding-bottom-5 ">

  <div class="col-md-4 active">
   <input type="image" name="image1" src="images\Neuron.jpg" alt="Neuron" value = '2' width="300" height="200">
   <p class = "text-center"> NEURON </p>
</div>
<div class="col-md-4 active">
   <input type="image" name="image1" src="images\fmri.jpg" alt="FMRI" value = '1' width="300" height="200">
   <p class = "text-center"> FMRI </p>
</div>

<div class="col-md-4 active">
   <input type="image" name="image1" src="images\wgcna.jpg" alt="WGCNA" value = '3' width="300" height="200">
   <p class = "text-center"> WGCNA </p>
</div>
</div>
<div class = "container" style="display: none;" id="selection1">
   <h3>FMRI</h3>
   <p>Functional magnetic resonance imaging or functional MRI (fMRI) measures brain activity by detecting changes associated with blood flow. This technique relies on the fact that cerebral blood flow and neuronal activation are coupled. When an area of the brain is in use, blood flow to that region also increases</p>

</br>
</br>
</div>
<div class = "container" style="display: block" id="selection2">
   <h3>NEURON</h3>
   <p>A neuron is an electrically excitable cell that receives, processes, and transmits information through electrical and chemical signals. These signals between neurons occur via specialized connections called synapses. Neurons can connect to each other to form neural networks. Neurons are major components of the brain and spinal cord of the central nervous system, and of the autonomic ganglia of the peripheral nervous system.</p>

   <h4>
      Workflow Details:
   </h4>
   <p>
      This tool will guide you through the creation, execution, and visualization of a neural simulation. It involves following steps and each step will be accomplished by a corresponding app.
   </p>
   <dl>
      <dt>Pre-processing</dt>
      <dd>Adjust the neuron types, morphology, connectivity, and weights using the "Pre-processing" app.</dd>
      <dt>NEURON Simulation</dt>
      <dd>Then execute the model on HPC resources using the "Neuron" app.</dd>
      <dt>Visulization</dt>
      <dd>Finally, visualize your results using the "Visualization" App.</dd>
   </dl> 

</p>

</br>
</br>
</div>
<div class = "container" style="display: none" id="selection3">
   <h3>WGCNA </h3>
   <p>Weighted correlation network analysis, also known as weighted gene co-expression network analysis (WGCNA), is a widely used data mining method especially for studying biological networks based on pairwise correlations between variables. While it can be applied to most high-dimensional data sets, it has been most widely used in genomic applications. It allows one to define modules (clusters), intramodular hubs, and network nodes with regard to module membership, to study the relationships between co-expression modules, and to compare the network topology of different networks.</p>
</br>
</br>
</div>
<div class="col-sm-12" style="display: none" id="selection1">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
      <input  type="text" class="form-control" id="inputname" >
   </div>
   <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
      <span class="glyphicon glyphicon-question-sign"></span>
      <span style="height: 40px" class="tooltiptext">Percentage of connections from Neuron Type A to Type B</span>
   </div>
   <div class="col-sm-2">
   </div>
</div>
<div class="form-actions" style="margin-left:50px ">
   <a class="btn btn-primary" href="neuronDetails.php">Next</a>
</div>
</br>
</body>
</html>