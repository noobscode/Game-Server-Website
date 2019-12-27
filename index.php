<?php include ('settings.php');?>

<!DOCTYPE html>
<html lang="en">

<?php include ("template/header.php");?>

<body>

  <!-- Navigation -->
  <?php include_once("template/main-nav.php");?>
  
  <!-- Page Content -->
  <div class="container">

    <?php if(tips == "ON"){include_once("demo-content/tips/tip1.php");};?>
    <?php if(MODULE_TopHeader == "ON"){include_once("modules/top-header.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip2.php");};?>
    <?php if(MODULE_herotext == "ON"){include_once("modules/hero-text.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip3.php");};?>
    <?php if(tips == "ON") if(API_Rustservers_net == "ON"){include_once("demo-content/tips/RSN.php");};?>
    <?php if(API_Rustservers_net == "ON"){include_once("modules/rust-servers-net-table.php");};?>
    <?php if(tips == "ON") if(API_BattleMetrics_com == "ON"){include_once("demo-content/tips/BM.php");};?>
    <?php if(API_BattleMetrics_com == "ON"){include_once("modules/battlemetrics-table.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip4.php");};?>
    <?php if(MODULE_maintenance == "ON"){include_once("modules/maintenance.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip5.php");};?>
    <?php if(MODULE_Cards == "ON"){include_once("modules/cards.php");};?>
    <?php if(MODULE_Tabs == "ON"){include_once("modules/tabs.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip6.php");};?>
    <?php if(MODULE_pricing_table == "ON"){include_once("modules/pricing-table.php");};?>
    <?php if(tips == "ON"){include_once("demo-content/tips/tip7.php");};?>
    <?php if(MODULE_rules == "ON"){include_once("modules/rules.php");};?>
    <?php if(MODULE_rules_accordion == "ON"){include_once("modules/rules-accordion.php");};?>
    <?php if(MODULE_faq == "ON"){include_once("modules/faq.php");};?>
    <?php if(MODULE_faq_accordion == "ON"){include_once("modules/faq-accordion.php");};?>
    
  </div>
</div>

  <!-- Footer -->
  <?php include ('template/footer.php');?>

</body>

</html>
