<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<script>
(function(){
  var attack_send = {
        // 职业
        level:58,
        hp: 10000,
        def:1000,
        dodge: 10,  // 10%
        strength: 1000,
        crit: 10,   // 10%
        intelligence:10
      },
      attack_accept = {
        level:70,
        hp: 10000,
        def:1000,
        dodge: 10,  // 10%
        strength: 1000,
        crit: 10,   // 10%
        intelligence:10
      }
  /**
   * 计算随机数
   * @param  {number} el [范围参数]
   * @return {boolean}    [是否在参数范围内 true false]
   */
  // function random_bool(el){
  //   return Math.random() <= el ? true : false;
  // };


  /**
   * [是否闪避成功]
   * @param  {object} attacka [攻击者]
   * @param  {object} attackb [被攻击者]
   * @return {boolean}         [true false]
   */
  function fight_dodge(attacka, attackb){
    var _basic = 1,   // 闪避倍值，每1等级差距3%闪避
        level_dev = attacka.level - attackb.level,  // 等级差距
        accept_dodge = attackb.dodge / 100, // 被攻击者原始闪避值 
        last_dodge = 0; // 最后计算得出的闪避值 默认不会被闪避 0%
    console.log(level_dev);
    if(level_dev >= 0){ // 如果攻击者比被攻击者等级高
      if(level_dev >= 10){ // 如果大于10级 不会被闪避 0%
        last_dodge = 0;
      }else{  // 如果小于10级
        last_dodge = accept_dodge - (level_dev * _basic) / 100;
        if(last_dodge <= 0){  // 如果闪避 <= 0 全部命中
          last_dodge = 0;
        }
      }
    }else{ // 如果攻击者比被攻击者等级低
      if(level_dev <= -10 ){  // 如果相差低于10级 永远被90%闪避
        last_dodge = 0.9
      }else{
        last_dodge = accept_dodge + (Math.abs(level_dev) * _basic) / 100;
      }
    }
//    console.log(last_dodge);
    return Math.random() <= last_dodge ? true : false;
  }
  function fight(){
    var is_dodge = fight_dodge(attack_send, attack_accept);
    if(is_dodge){
      console.log('闪避');
    }else{
      console.log('命中');
    }
  }
  fight();

  
  /**
   * 计算伤害
   */
  function damage(person){
    var dmg = 0,
        crits = false;

    // TODO 获取职业
    if('wirrir'){
      dmg = person.strength * 1.5;
    }
    // 是否暴击
    crits = Math.random() <= person.crit / 100 ? true : false;
    if(crits){
      dmg = dmg * 1.5;
    }
    return dmg;
  }

  damage(attack_send);
})();
</script>
</body>
</html>