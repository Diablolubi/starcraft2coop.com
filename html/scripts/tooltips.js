(() => {
  var __defProp = Object.defineProperty;
  var __getOwnPropNames = Object.getOwnPropertyNames;
  var __getOwnPropDesc = Object.getOwnPropertyDescriptor;
  var __hasOwnProp = Object.prototype.hasOwnProperty;
  function __accessProp(key) {
    return this[key];
  }
  var __toCommonJS = (from) => {
    var entry = (__moduleCache ??= new WeakMap).get(from), desc;
    if (entry)
      return entry;
    entry = __defProp({}, "__esModule", { value: true });
    if (from && typeof from === "object" || typeof from === "function") {
      for (var key of __getOwnPropNames(from))
        if (!__hasOwnProp.call(entry, key))
          __defProp(entry, key, {
            get: __accessProp.bind(from, key),
            enumerable: !(desc = __getOwnPropDesc(from, key)) || desc.enumerable
          });
    }
    __moduleCache.set(from, entry);
    return entry;
  };
  var __moduleCache;
  var __returnValue = (v) => v;
  function __exportSetter(name, newValue) {
    this[name] = __returnValue.bind(null, newValue);
  }
  var __export = (target, all) => {
    for (var name in all)
      __defProp(target, name, {
        get: all[name],
        enumerable: true,
        configurable: true,
        set: __exportSetter.bind(all, name)
      });
  };

  // source-data/mutators.json
  var mutators_default = [
    {
      mutatorid: 1,
      mutatorname: "极度谨慎",
      abomination: 0,
      mutatordescription: "除镜头当前覆盖的区域外，所有来源提供的视野都极其有限。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 2,
      mutatorname: "进攻部署",
      abomination: 3,
      mutatordescription: "额外的敌方单位会定期部署到战场上。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 3,
      mutatorname: "异形寄生",
      abomination: 2,
      mutatordescription: "所有敌方单位死亡时都会生成巢虫。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 4,
      mutatorname: "复仇战士",
      abomination: 5,
      mutatordescription: "附近有敌方单位死亡时，敌军会提高攻击速度、移动速度、护甲、生命值和生命恢复速度。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 5,
      mutatorname: "减伤屏障",
      abomination: 2,
      mutatordescription: "敌方单位和建筑首次受到伤害时会获得一层临时护盾。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 6,
      mutatorname: "黑死病",
      abomination: 7,
      mutatordescription: "部分敌方单位携带会持续造成伤害并向附近单位传播的瘟疫。携带者被消灭时，瘟疫会传播给你的单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 7,
      mutatorname: "暴风雪",
      abomination: 4,
      mutatordescription: "暴风云会在地图上移动，对路径上的玩家单位造成伤害并将其冻结。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 8,
      mutatorname: "混乱工作室",
      abomination: 0,
      mutatordescription: "突变因子会随机选取，并在任务期间定期轮换。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 9,
      mutatorname: "震荡攻击",
      abomination: 1,
      mutatordescription: "所有敌方攻击都会使玩家单位减速。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 10,
      mutatorname: "暗无天日",
      abomination: 2,
      mutatordescription: "离开玩家视野后，已经探索的区域在小地图上仍会变为黑色。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 11,
      mutatorname: "伤害散射",
      abomination: 3,
      mutatordescription: "对敌人造成的伤害会平均分摊给附近所有单位，包括你的单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 12,
      mutatorname: "双重压力",
      abomination: 3,
      mutatordescription: "你的单位和建筑造成的伤害会反作用于自身，但随后会随时间恢复。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 13,
      mutatorname: "强行征用",
      abomination: 1,
      mutatordescription: "敌人摧毁你的建筑后会取得该建筑的控制权。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 14,
      mutatorname: "闪避机动",
      abomination: 1,
      mutatordescription: "敌方单位受到伤害时会向远处短距离传送。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 15,
      mutatorname: "致命勾引",
      abomination: 3,
      mutatordescription: "敌方单位和建筑死亡时，会将附近的玩家单位拉到其位置。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 16,
      mutatorname: "无边恐惧",
      abomination: 3,
      mutatordescription: "玩家单位受到伤害时偶尔会停止攻击，并因恐惧而四处逃窜。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 17,
      mutatorname: "焰火秀",
      abomination: 0,
      mutatordescription: "敌人死亡时会发射耀眼的烟花，对附近的玩家单位造成伤害。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 18,
      mutatorname: "礼尚往来",
      abomination: 0,
      mutatordescription: "地图各处会定期投放礼物。如果你不去领取，埃蒙就会拿走！",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 19,
      mutatorname: "核弹打击",
      abomination: 3,
      mutatordescription: "核弹会随机发射到地图各处。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 20,
      mutatorname: "坚强意志",
      abomination: 2,
      mutatordescription: "附近存在非英雄敌方单位时，敌方英雄单位受到的单次伤害最多为 10 点。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 21,
      mutatorname: "风暴英雄",
      abomination: 10,
      mutatordescription: "每波进攻都由实力逐渐增强的英雄带领。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 22,
      mutatorname: "鼓舞人心",
      abomination: 2,
      mutatordescription: "敌方英雄单位会提高小范围内所有敌人的攻击速度和护甲。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 23,
      mutatorname: "给我死吧！",
      abomination: 7,
      mutatordescription: "敌方单位死亡后会自动复活。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 24,
      mutatorname: "杀戮机器人",
      abomination: 6,
      mutatordescription: "一波波机器人会攻击玩家；在消灭指定数量的单位前，它们不会受到伤害。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 25,
      mutatorname: "激光钻机",
      abomination: 2,
      mutatordescription: "一台敌方德拉肯激光钻机会持续攻击处于敌方视野内的玩家单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 26,
      mutatorname: "岩浆爆发",
      abomination: 3,
      mutatordescription: "熔岩会定期从随机位置喷出，对玩家的空中和地面单位造成伤害。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 27,
      mutatorname: "生命吸取",
      abomination: 1,
      mutatordescription: "敌方单位每次造成伤害时都会窃取生命值或护盾。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 28,
      mutatorname: "超远视距",
      abomination: 2,
      mutatordescription: "敌方单位和建筑的武器射程与视野范围提高。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 29,
      mutatorname: "幸运红包",
      abomination: 0,
      mutatordescription: "装有资源拾取物的节日红包会随机掉落在地图各处。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 30,
      mutatorname: "强磁雷场",
      abomination: 4,
      mutatordescription: "任务开始时，地图各处会部署磁力地雷。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 31,
      mutatorname: "拿钱说话",
      abomination: 5,
      mutatordescription: "向单位下达命令会根据该单位的费用消耗资源。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 32,
      mutatorname: "晶矿护盾",
      abomination: 2,
      mutatordescription: "玩家基地的矿区会定期被护盾包围；必须摧毁护盾才能继续采集。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 33,
      mutatorname: "扫雷专家",
      abomination: 6,
      mutatordescription: "战场各处埋藏着成群的寡妇雷和蜘蛛雷。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 34,
      mutatorname: "飞弹大战",
      abomination: 3,
      mutatordescription: "无穷无尽的导弹会轰炸你的建筑，必须在整个任务期间将其击落。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 35,
      mutatorname: "默哀",
      abomination: 2,
      mutatordescription: "敌方英雄单位死亡时，周围所有玩家单位都会反思自己的罪行，暂时无法攻击或使用技能。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 36,
      mutatorname: "相互摧毁",
      abomination: 5,
      mutatordescription: "敌方混合体单位死亡时会引爆一枚核弹。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 37,
      mutatorname: "杀生业报",
      abomination: 0,
      mutatordescription: "玩家单位和建筑每消灭一个敌人，受到的伤害就会提高。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 38,
      mutatorname: "轨道轰炸",
      abomination: 1,
      mutatordescription: "敌方轨道轰炸会定期攻击地图各处。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 39,
      mutatorname: "丧尸大战",
      abomination: 3,
      mutatordescription: "一波波被感染的大军会持续向指挥官的基地进发。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 40,
      mutatorname: "光子过载",
      abomination: 1,
      mutatordescription: "所有敌方建筑都会攻击附近的敌对单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 41,
      mutatorname: "极性不定",
      abomination: 7,
      mutatordescription: "每个敌方单位都免疫你或盟友其中一方单位的攻击。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 42,
      mutatorname: "灵能爆表",
      abomination: 5,
      mutatordescription: "所有敌方单位都拥有能量，并会随机使用技能。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 43,
      mutatorname: "同化体",
      abomination: 8,
      mutatordescription: "扭曲现实的软泥怪正向你爬来。它们接触到的任何单位都会变成软泥怪的复制体。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 44,
      mutatorname: "净化光束",
      abomination: 2,
      mutatordescription: "一道敌方净化光束会在地图上移动，追逐附近的玩家单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 45,
      mutatorname: "随机",
      abomination: 0,
      mutatordescription: "随机分配一个突变因子。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 46,
      mutatorname: "焦土政策",
      abomination: 2,
      mutatordescription: "敌方单位死亡时会点燃周围地面。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 47,
      mutatorname: "自毁程序",
      abomination: 3,
      mutatordescription: "敌方单位死亡时会爆炸，并对友方玩家单位造成伤害。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 48,
      mutatorname: "补给共享",
      abomination: 0,
      mutatordescription: "你与盟友共享人口，双方部队都会计入共同的人口上限。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 49,
      mutatorname: "短视症",
      abomination: 1,
      mutatordescription: "玩家单位和建筑的视野范围缩小。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 50,
      mutatorname: "小捞油水",
      abomination: 5,
      mutatordescription: "玩家工人的资源采集速度降低，但地图各处会生成资源拾取物。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 51,
      mutatorname: "速度狂魔",
      abomination: 2,
      mutatordescription: "敌人的移动速度超过玩家能够使用的任何单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 52,
      mutatorname: "时空力场",
      abomination: 1,
      mutatordescription: "敌方时空力场会定期部署到地图各处。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 53,
      mutatorname: "时间扭曲",
      abomination: 1,
      mutatordescription: "敌方时间扭曲会定期部署到地图各处。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 54,
      mutatorname: "力量蜕变",
      abomination: 7,
      mutatordescription: "敌方单位每次造成伤害时，都有几率转化为更强大的单位。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 55,
      mutatorname: "不给糖果就捣蛋",
      abomination: 0,
      mutatordescription: "平民会造访你的糖果碗索要糖果，花费矿物即可生成糖果。没有糖果时，平民会随机变成敌方单位。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 56,
      mutatorname: "捕杀火鸡",
      abomination: 0,
      mutatordescription: "只能通过消灭在地图各处游荡的火鸡来获得人口。这样做可能激怒剩余的火鸡。",
      customusable: false,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 57,
      mutatorname: "龙卷风暴",
      abomination: 2,
      mutatordescription: "龙卷风会在地图上移动，对路径上的玩家单位造成伤害并将其击退。",
      customusable: true,
      chaosrollable: true,
      hassafezone: true
    },
    {
      mutatorid: 58,
      mutatorname: "迷失方向",
      abomination: 0,
      mutatordescription: "你的镜头位置会随机变化。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    },
    {
      mutatorid: 59,
      mutatorname: "虚空重生者",
      abomination: 5,
      mutatordescription: "虚空复生者会在战场上游荡，使敌人死而复生。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 60,
      mutatorname: "虚空裂隙",
      abomination: 10,
      mutatordescription: "虚空裂隙会定期出现在随机位置，并持续生成敌方单位，直至被摧毁。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 61,
      mutatorname: "行尸走肉",
      abomination: 2,
      mutatordescription: "指挥官消灭的每个敌方单位都会生成被感染的人类。单位的生命值越高，尸体中出现的感染体就越多。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 62,
      mutatorname: "来去无踪",
      abomination: 3,
      mutatordescription: "所有敌方单位都永久隐形。",
      customusable: true,
      chaosrollable: true,
      hassafezone: false
    },
    {
      mutatorid: 63,
      mutatorname: "炸弹机器人",
      abomination: 10,
      mutatordescription: "冷酷无情的自动机器人携带核弹向你的基地推进。一名玩家必须识别解除序列，另一名玩家则必须输入该序列。",
      customusable: true,
      chaosrollable: false,
      hassafezone: false
    }
  ];

  // source-data/playerupgrades.json
  var playerupgrades_default = [
    {
      upgradeid: 1,
      unit: "Roach",
      commander: "Abathur",
      name: "胶质重构",
      icon: "glialreconstitution",
      effect: "蟑螂的移动速度提高33%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.75,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 2,
      unit: "Roach",
      commander: "Abathur",
      name: "氢碘酸胆汁",
      icon: "hydriodicbile",
      effect: "蟑螂对轻甲单位额外造成8点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 8,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 3,
      unit: "Mutalisk",
      commander: "Abathur",
      name: "裂甲飞刃",
      icon: "sunderingglave",
      effect: "异龙对重甲单位造成100%额外伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Armored",
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 4,
      unit: "Guardian",
      commander: "Abathur",
      name: "延展扩散",
      icon: "prolongeddispersion",
      effect: "守护者的攻击射程提高3。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 5,
      unit: "Supplicant",
      commander: "Alarak",
      name: "鲜血护盾",
      icon: "bloodshields",
      effect: "降低敌人对供奉者护盾造成的伤害，增加2点护盾护甲。",
      modifier: "Shield_Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 6,
      unit: "Supplicant",
      commander: "Alarak",
      name: "灵魂强化",
      icon: "soulaugmentation",
      effect: "供奉者的护盾提高25。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 7,
      unit: "Vanguard",
      commander: "Alarak",
      name: "聚变迫击炮",
      icon: "fusionmortars",
      effect: "先锋对重甲单位造成的伤害提高7。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Armored",
      value: 7,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 8,
      unit: "Observer",
      commander: "Artanis",
      name: "引力推进器",
      icon: "graviticboosters",
      effect: "侦察机的移动速度提高50%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 9,
      unit: "Dragoon",
      commander: "Artanis",
      name: "奇点充能",
      icon: "singularitycharge",
      effect: "龙骑士的攻击射程提高2。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 10,
      unit: "Dragoon",
      commander: "Artanis",
      name: "三锂压缩系统",
      icon: "trilliccompressionsystems",
      effect: "龙骑士获得20点生命值，护盾恢复速度翻倍，并可在战斗中恢复护盾。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 20,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 11,
      unit: "Phoenix",
      commander: "Artanis",
      name: "阴离子脉冲水晶",
      icon: "anionpulsecrystals",
      effect: "凤凰的射程提高2。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 12,
      unit: "Ravasaur",
      commander: "Dehaka",
      name: "溶解强酸",
      icon: "dissolvingacid",
      effect: "劫掠兽对重甲目标额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Armored",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 13,
      unit: "Ravasaur",
      commander: "Dehaka",
      name: "增生腮腺",
      icon: "enlargedparotidglands",
      effect: "提高移动速度和攻击射程。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 14,
      unit: "Primal Roach",
      commander: "Dehaka",
      name: "胶质重构",
      icon: "glialreconstitution",
      effect: "原始蟑螂的移动速度提高31%，原始点火虫的移动速度提高19%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.7,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 15,
      unit: "Primal Igniter",
      commander: "Dehaka",
      name: "胶质重构",
      icon: "glialreconstitution",
      effect: "原始蟑螂的移动速度提高31%，原始点火虫的移动速度提高19%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.55,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 16,
      unit: "Primal Igniter",
      commander: "Dehaka",
      name: "集中火力",
      icon: "concentratedfire",
      effect: "原始点火虫对轻甲敌人造成的伤害提高15。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 17,
      unit: "Primal Hydralisk",
      commander: "Dehaka",
      name: "肌肉强化",
      icon: "muscularaugments",
      effect: "原始刺蛇的移动速度提高22%，攻击射程提高1。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.56,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 18,
      unit: "Primal Hydralisk",
      commander: "Dehaka",
      name: "肌肉强化",
      icon: "muscularaugments",
      effect: "原始刺蛇的移动速度提高22%，攻击射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 19,
      unit: "Fenix Praetor Armor",
      commander: "Fenix",
      name: "净化者武装",
      icon: "purifierarmaments",
      effect: "菲尼克斯的所有战甲攻击伤害提高15。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 20,
      unit: "Colossus",
      commander: "Fenix",
      name: "加长型热能长枪",
      icon: "extendedthermallance",
      effect: "巨像的射程提高3。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 21,
      unit: "Scout",
      commander: "Fenix",
      name: "作战传感器阵列",
      icon: "combatsensorarray",
      effect: "侦察机的对空攻击射程提高3，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 22,
      unit: "Scout",
      commander: "Fenix",
      name: "作战传感器阵列",
      icon: "combatsensorarray",
      effect: "侦察机的对空攻击射程提高3，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Ground)",
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 23,
      unit: "Mojo",
      commander: "Fenix",
      name: "作战传感器阵列",
      icon: "combatsensorarray",
      effect: "侦察机的对空攻击射程提高3，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 24,
      unit: "Mojo",
      commander: "Fenix",
      name: "作战传感器阵列",
      icon: "combatsensorarray",
      effect: "侦察机的对空攻击射程提高3，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Ground)",
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 25,
      unit: "Observer",
      commander: "Fenix",
      name: "引力推进器",
      icon: "graviticboosters",
      effect: "侦察机的移动速度提高50%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 26,
      unit: "Reaper",
      commander: "Horner",
      name: "喷气背包过载",
      icon: "jetpackoverdrive",
      effect: "收割者的移动速度提高1.5，并可飞行10秒。飞行期间可攻击空中单位。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.55,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 29,
      unit: "Observer",
      commander: "Karax",
      name: "引力推进器",
      icon: "graviticboosters",
      effect: "侦察机的移动速度提高50%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 30,
      unit: "Colossus",
      commander: "Karax",
      name: "加长型热能长枪",
      icon: "extendedthermallance",
      effect: "巨像的射程提高3。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 31,
      unit: "Mirage",
      commander: "Karax",
      name: "阴离子脉冲水晶",
      icon: "anionpulsecrystals",
      effect: "幻影的射程提高2。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 32,
      unit: "Kerrigan",
      commander: "Kerrigan",
      name: "英雄坚毅",
      icon: "heroicfortitude",
      effect: `凯瑞甘的最大生命值提高200。\r
生命恢复速度提高100%。`,
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 33,
      unit: "Zergling",
      commander: "Kerrigan",
      name: "代谢加速",
      icon: "metabolicboost",
      effect: "跳虫的移动速度提高60%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.6,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 34,
      unit: "Zergling",
      commander: "Kerrigan",
      name: "硬化甲壳",
      icon: "hardenedcarapace",
      effect: "跳虫的最大生命值提高10。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 35,
      unit: "Hydralisk",
      commander: "Kerrigan",
      name: "肌肉强化",
      icon: "muscularaugments",
      effect: "刺蛇的移动速度提高25%，攻击射程提高1。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 36,
      unit: "Hydralisk",
      commander: "Kerrigan",
      name: "肌肉强化",
      icon: "muscularaugments",
      effect: "刺蛇的移动速度提高25%，攻击射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 37,
      unit: "Hydralisk",
      commander: "Kerrigan",
      name: "附属甲壳",
      icon: "ancillarycarapace",
      effect: "刺蛇的最大生命值提高20。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 20,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 38,
      unit: "Lurker",
      commander: "Kerrigan",
      name: "震地棘刺",
      icon: "seismicspines",
      effect: "潜伏者的攻击射程提高3。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 39,
      unit: "Ultralisk",
      commander: "Kerrigan",
      name: "几丁质甲壳",
      icon: "chitinousplating",
      effect: "雷兽的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 40,
      unit: "Brood Lord",
      commander: "Kerrigan",
      name: "多孔软骨",
      icon: "porouscartilage",
      effect: "巢虫领主的移动速度提高75%，生命值提高100。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.75,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 41,
      unit: "Elite Marine",
      commander: "Nova",
      name: "激光瞄准系统",
      icon: "lasertargetingsystem",
      effect: "精英陆战队员的视野提高2，武器射程提高1。",
      modifier: "Vision",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 42,
      unit: "Elite Marine",
      commander: "Nova",
      name: "激光瞄准系统",
      icon: "lasertargetingsystem",
      effect: "精英陆战队员的视野提高2，武器射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 43,
      unit: "Elite Marine",
      commander: "Nova",
      name: "超级兴奋剂",
      icon: "superstimpack",
      effect: "每秒恢复2点生命值，并提高其攻击速度和移动速度，持续15秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 44,
      unit: "Elite Marine",
      commander: "Nova",
      name: "超级兴奋剂",
      icon: "superstimpack",
      effect: "每秒恢复2点生命值，并提高其攻击速度和移动速度，持续15秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 45,
      unit: "Hellbat Ranger",
      commander: "Nova",
      name: "炼狱预燃器",
      icon: "infernalpreigniter",
      effect: "两种模式下，恶火战车对轻甲单位额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 46,
      unit: "Hellion Ranger",
      commander: "Nova",
      name: "炼狱预燃器",
      icon: "infernalpreigniter",
      effect: "两种模式下，恶火战车对轻甲单位额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 47,
      unit: "Strike Goliath",
      commander: "Nova",
      name: "阿瑞斯级瞄准系统",
      icon: "aresclasstargetingsystem",
      effect: "打击型歌利亚的对空武器射程提高3，对地武器射程提高1。",
      modifier: "Range",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 48,
      unit: "Strike Goliath",
      commander: "Nova",
      name: "阿瑞斯级瞄准系统",
      icon: "aresclasstargetingsystem",
      effect: "打击型歌利亚的对空武器射程提高3，对地武器射程提高1。",
      modifier: "Range",
      modifiermode: "(Ground)",
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 49,
      unit: "Marine",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 50,
      unit: "Marine",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.75,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 51,
      unit: "Marine",
      commander: "Raynor",
      name: "战斗盾牌",
      icon: "combatshield",
      effect: "陆战队员的生命值提高10。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 52,
      unit: "Marauder",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 53,
      unit: "Marauder",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.75,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 54,
      unit: "Firebat",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 55,
      unit: "Firebat",
      commander: "Raynor",
      name: "兴奋剂",
      icon: "stimpack",
      effect: "为单位注射强力兴奋剂，使攻击速度提高43%、移动速度提高50%，持续10秒，并使单位损失5点生命值。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.75,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 56,
      unit: "Firebat",
      commander: "Raynor",
      name: "主宰装甲",
      icon: "juggernautplating",
      effect: "火蝠获得100点生命值和2点护甲。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 100,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 57,
      unit: "Firebat",
      commander: "Raynor",
      name: "主宰装甲",
      icon: "juggernautplating",
      effect: "火蝠获得100点生命值和2点护甲。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 58,
      unit: "Vulture",
      commander: "Raynor",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 59,
      unit: "Vulture",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 60,
      unit: "Siege Tank",
      commander: "Raynor",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 61,
      unit: "Siege Tank",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 62,
      unit: "Viking",
      commander: "Raynor",
      name: "福波斯武器系统",
      icon: "phobosweaponssystem",
      effect: "维京战机武器系统升级。对空攻击射程提高2，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Assault Mode)",
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 63,
      unit: "Viking",
      commander: "Raynor",
      name: "福波斯武器系统",
      icon: "phobosweaponssystem",
      effect: "维京战机武器系统升级。对空攻击射程提高2，对地攻击射程提高1。",
      modifier: "Range",
      modifiermode: "(Fighter Mode)",
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 64,
      unit: "Viking",
      commander: "Raynor",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 65,
      unit: "Viking",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 66,
      unit: "Banshee",
      commander: "Raynor",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 67,
      unit: "Banshee",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 68,
      unit: "Battlecruiser",
      commander: "Raynor",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 69,
      unit: "Battlecruiser",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 70,
      unit: "Asteria Wraith",
      commander: "Horner",
      name: "扳机超控",
      icon: "triggeroverride",
      effect: `怨灵每次攻击使攻击速度提高10%，最多提高100%。\r
\r
被动技能。`,
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 71,
      unit: "Heavy Siege Tank",
      commander: "Nova",
      name: "渐增射程",
      icon: "graduatingrange",
      effect: "重型攻城坦克在攻城模式下每3秒使攻击射程提高1，最多额外提高5。",
      modifier: "Range",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 72,
      unit: "Infested Marine",
      commander: "Stukov",
      name: "视网膜强化",
      icon: "retinalaugmentation",
      effect: "感染陆战队员和感染士兵的攻击射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 73,
      unit: "Infested Trooper",
      commander: "Stukov",
      name: "视网膜强化",
      icon: "retinalaugmentation",
      effect: "感染陆战队员和感染士兵的攻击射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 74,
      unit: "Infested Bunker",
      commander: "Stukov",
      name: "钙化装甲",
      icon: "calcifiedarmor",
      effect: "感染地堡的护甲提高3。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 75,
      unit: "Infested Siege Tank",
      commander: "Stukov",
      name: "酸性酶",
      icon: "acidicenzymes",
      effect: "感染攻城坦克在两种模式下对重甲单位和建筑额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Armored",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 76,
      unit: "Infested Liberator",
      commander: "Stukov",
      name: "病毒污染",
      icon: "viralcontamination",
      effect: "感染解放者对主要目标造成的伤害提高100%。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 77,
      unit: "Infested Banshee",
      commander: "Stukov",
      name: "加固外骨骼",
      icon: "bracedexoskeleton",
      effect: "感染女妖的生命值提高100。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 100,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 78,
      unit: "Hellbat",
      commander: "Swann",
      name: "炼狱预燃器",
      icon: "infernalpreigniter",
      effect: "两种模式下，恶火战车对轻甲单位额外造成10点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 79,
      unit: "Hellbat",
      commander: "Swann",
      name: "炼狱装甲",
      icon: "infernalplating",
      effect: "恶火和恶火战车的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 80,
      unit: "Hellbat",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 81,
      unit: "Goliath",
      commander: "Swann",
      name: "阿瑞斯级瞄准系统",
      icon: "aresclasstargetingsystem",
      effect: "歌利亚的对空武器射程提高3，对地武器射程提高1。",
      modifier: "Range",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 82,
      unit: "Goliath",
      commander: "Swann",
      name: "阿瑞斯级瞄准系统",
      icon: "aresclasstargetingsystem",
      effect: "歌利亚的对空武器射程提高3，对地武器射程提高1。",
      modifier: "Range",
      modifiermode: "(Ground)",
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 83,
      unit: "Goliath",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 84,
      unit: "Siege Tank",
      commander: "Swann",
      name: "漩涡弹药",
      icon: "maelstromrounds",
      effect: "攻城坦克在攻城模式下的攻击伤害提高40，溅射伤害不变。",
      modifier: "damage",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 40,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 85,
      unit: "Siege Tank",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 86,
      unit: "Cyclone",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 87,
      unit: "Thor",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 88,
      unit: "Wraith",
      commander: "Swann",
      name: "脉冲放大器",
      icon: "pulseamplifier",
      effect: "怨灵移动时，双子飞弹的伤害提高100%，爆裂激光的伤害提高300%。",
      modifier: "damage",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 89,
      unit: "Wraith",
      commander: "Swann",
      name: "脉冲放大器",
      icon: "pulseamplifier",
      effect: "怨灵移动时，双子飞弹的伤害提高100%，爆裂激光的伤害提高300%。",
      modifier: "damage",
      modifiermode: "(Ground)",
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 90,
      unit: "Wraith",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 91,
      unit: "Tychus Findlay",
      commander: "Tychus",
      name: "ITC-E 扳机",
      icon: "itcetriggers",
      effect: "泰凯斯、歪嘴山姆和天狼星的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 92,
      unit: "Crooked Sam",
      commander: "Tychus",
      name: "ITC-E 扳机",
      icon: "itcetriggers",
      effect: "泰凯斯、歪嘴山姆和天狼星的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 93,
      unit: "James Sirius Sykes",
      commander: "Tychus",
      name: "ITC-E 扳机",
      icon: "itcetriggers",
      effect: "泰凯斯、歪嘴山姆和天狼星的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 94,
      unit: "Miles Blaze Lewis",
      commander: "Tychus",
      name: "耐久强化剂",
      icon: "endurancesupplements",
      effect: "烈焰、炮弹和响尾蛇的生命值提高25%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 95,
      unit: "Rob Cannonball Boswell",
      commander: "Tychus",
      name: "耐久强化剂",
      icon: "endurancesupplements",
      effect: "烈焰、炮弹和响尾蛇的生命值提高25%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 96,
      unit: "Kev Rattlesnake West",
      commander: "Tychus",
      name: "耐久强化剂",
      icon: "endurancesupplements",
      effect: "烈焰、炮弹和响尾蛇的生命值提高25%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 97,
      unit: "Void Ray",
      commander: "Vorazun",
      name: "棱镜射程",
      icon: "prismaticrange",
      effect: "虚空辉光舰持续攻击时，武器射程逐渐提高，最多提高3。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 98,
      unit: "Zagara",
      commander: "Zagara",
      name: "英雄坚毅",
      icon: "heroicfortitude",
      effect: `扎加拉的最大生命值提高200。\r
生命恢复速度提高100%。`,
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 99,
      unit: "Zergling",
      commander: "Zagara",
      name: "代谢加速",
      icon: "metabolicboost",
      effect: "跳虫的移动速度提高60%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.6,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 100,
      unit: "Zergling",
      commander: "Zagara",
      name: "硬化甲壳",
      icon: "hardenedcarapace",
      effect: "跳虫的最大生命值提高10。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 101,
      unit: "Zergling",
      commander: "Kerrigan",
      name: "肾上腺过载",
      icon: "adrenaloverload",
      effect: "跳虫的攻击速度提高40%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 102,
      unit: "Zergling",
      commander: "Zagara",
      name: "肾上腺过载",
      icon: "adrenaloverload",
      effect: "跳虫的攻击速度提高40%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 103,
      unit: "Baneling",
      commander: "Zagara",
      name: "离心钩",
      icon: "centrifugalhooks",
      effect: "爆虫的移动速度提高15%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.45,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 104,
      unit: "Baneling Spawn",
      commander: "Zagara",
      name: "离心钩",
      icon: "centrifugalhooks",
      effect: "爆虫的移动速度提高15%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.45,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 105,
      unit: "Baneling",
      commander: "Zagara",
      name: "腐蚀强酸",
      icon: "corrosiveacid",
      effect: "爆虫对主要目标的基础攻击伤害提高100%，溅射伤害不变。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 40,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 106,
      unit: "Baneling Spawn",
      commander: "Zagara",
      name: "腐蚀强酸",
      icon: "corrosiveacid",
      effect: "爆虫对主要目标的基础攻击伤害提高100%，溅射伤害不变。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 107,
      unit: "Scourge",
      commander: "Zagara",
      name: "简化基因组",
      icon: "simplifiedgenome",
      effect: "将单位变异为爆蚊所需的高能瓦斯减少50。",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: -25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 108,
      unit: "XelNaga Abrogator",
      commander: "Zeratul",
      name: "新星电池",
      icon: "novabattery",
      effect: "净化新星的冷却时间缩短50%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 109,
      unit: "XelNaga Watcher",
      commander: "Zeratul",
      name: "引力推进器",
      icon: "graviticboosters",
      effect: "萨尔那加观察者的移动速度提高50%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 110,
      unit: "XelNaga Watcher",
      commander: "Zeratul",
      name: "传感器阵列",
      icon: "sensorarray",
      effect: "萨尔那加观察者的视野半径提高50%。",
      modifier: "Vision",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 111,
      unit: "Overlord",
      commander: "Abathur",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 112,
      unit: "Overseer",
      commander: "Abathur",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: "(Normal)",
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 113,
      unit: "Overlord",
      commander: "Kerrigan",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 114,
      unit: "Overseer",
      commander: "Kerrigan",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: "(Normal)",
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 115,
      unit: "Overlord",
      commander: "Stukov",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 116,
      unit: "Overseer",
      commander: "Stukov",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: "(Normal)",
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 117,
      unit: "Overlord",
      commander: "Zagara",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 118,
      unit: "Overseer",
      commander: "Zagara",
      name: "气动甲壳",
      icon: "pneumatizedcarapace",
      effect: "提高领主和监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: "(Normal)",
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 119,
      unit: "Hellion",
      commander: "Swann",
      name: "炼狱预燃器",
      icon: "infernalpreigniter",
      effect: "两种模式下，恶火战车对轻甲单位额外造成10点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Light",
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 120,
      unit: "Hellion",
      commander: "Swann",
      name: "炼狱装甲",
      icon: "infernalplating",
      effect: "恶火和恶火战车的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 121,
      unit: "Hellion",
      commander: "Swann",
      name: "高级光学系统",
      icon: "advancedoptics",
      effect: "所有载具和舰船武器的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 122,
      unit: "Spinning Dizzy",
      commander: "Swann",
      name: "高安自动追踪",
      icon: "hisecautotracking",
      effect: "所有炮台的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 123,
      unit: "Spinning Dizzy",
      commander: "Swann",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 124,
      unit: "Spinning Dizzy",
      commander: "Swann",
      name: "KMC自动装填器",
      icon: "kmcautoloaders",
      effect: "所有炮台的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 125,
      unit: "Flaming Betty",
      commander: "Swann",
      name: "高安自动追踪",
      icon: "hisecautotracking",
      effect: "所有炮台的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 126,
      unit: "Flaming Betty",
      commander: "Swann",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 127,
      unit: "Flaming Betty",
      commander: "Swann",
      name: "KMC自动装填器",
      icon: "kmcautoloaders",
      effect: "所有炮台的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 128,
      unit: "Blaster Billy",
      commander: "Swann",
      name: "高安自动追踪",
      icon: "hisecautotracking",
      effect: "所有炮台的射程提高1。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 129,
      unit: "Blaster Billy",
      commander: "Swann",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 130,
      unit: "Blaster Billy",
      commander: "Swann",
      name: "KMC自动装填器",
      icon: "kmcautoloaders",
      effect: "所有炮台的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 131,
      unit: "Photon Cannon",
      commander: "Karax",
      name: "强化瞄准",
      icon: "enhancedtargeting",
      effect: "光子炮、凯达林巨石和护盾充能器的射程提高2。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 132,
      unit: "Photon Cannon",
      commander: "Karax",
      name: "优化军械",
      icon: "optimizedordnance",
      effect: "光子炮和凯达林巨石的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 133,
      unit: "Khaydarin Monolith",
      commander: "Karax",
      name: "强化瞄准",
      icon: "enhancedtargeting",
      effect: "光子炮、凯达林巨石和护盾充能器的射程提高2。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 134,
      unit: "Khaydarin Monolith",
      commander: "Karax",
      name: "优化军械",
      icon: "optimizedordnance",
      effect: "光子炮和凯达林巨石的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.25,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 135,
      unit: "Warhound Turret",
      commander: "Tychus",
      name: "尤摩扬炮台框架",
      icon: "umojanturretframe",
      effect: "战狼炮台的生命值和武器伤害提高75%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 113,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 136,
      unit: "Warhound Turret",
      commander: "Tychus",
      name: "尤摩扬炮台框架",
      icon: "umojanturretframe",
      effect: "战狼炮台的生命值和武器伤害提高75%。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 14,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 137,
      unit: "Baneling",
      commander: "Zagara",
      name: "腐蚀强酸",
      icon: "corrosiveacid",
      effect: "爆虫对主要目标的基础攻击伤害提高100%，溅射伤害不变。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Structure",
      value: 40,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 138,
      unit: "Banelnig Spawn",
      commander: "Zagara",
      name: "腐蚀强酸",
      icon: "corrosiveacid",
      effect: "爆虫对主要目标的基础攻击伤害提高100%，溅射伤害不变。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Structure",
      value: 5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 139,
      unit: "Bile Launcher",
      commander: "Zagara",
      name: "火炮导管",
      icon: "artilleryducts",
      effect: "胆汁喷射体的轰击射程提高10。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 140,
      unit: "Bile Launcher",
      commander: "Zagara",
      name: "快速轰击",
      icon: "rapidbombardment",
      effect: "缩短胆汁喷射体轰击的冷却时间。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 5,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 141,
      unit: "Volatile Infested",
      commander: "Stukov",
      name: "酸性酶",
      icon: "acidicenzymes",
      effect: "感染攻城坦克在两种模式下对重甲单位和建筑额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Armored",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 142,
      unit: "Ravasaur",
      commander: "Dehaka",
      name: "增生腮腺",
      icon: "enlargedparotidglands",
      effect: "提高移动速度和攻击射程。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 143,
      unit: "Infested Liberator",
      commander: "Stukov",
      name: "云雾扩散",
      icon: "clouddispersal",
      effect: "感染解放者攻击时立即化为微生物云，受到的伤害降低85%。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 0,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 144,
      unit: "Infested Liberator",
      commander: "Stukov",
      name: "云雾扩散",
      icon: "clouddispersal",
      effect: "感染解放者攻击时立即化为微生物云，受到的伤害降低85%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 145,
      unit: "Infested Banshee",
      commander: "Stukov",
      name: "隐形",
      icon: "cloak",
      effect: `使单位隐形，敌方单位无法看见或攻击它。隐形单位只能被侦测单位或效果发现。隐形的感染女妖射程还会提高2。\r
\r
每秒消耗0.9点能量。`,
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 146,
      unit: "Banshee",
      commander: "Raynor",
      name: "隐形",
      icon: "cloakingfield",
      effect: `使单位隐形，敌方单位无法看见或攻击它。隐形单位只能被侦测单位或效果发现。\r
\r
每秒消耗0.9点能量。`,
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 147,
      unit: "Mecha Zergling",
      commander: "Stetmann",
      name: "金属代谢加速",
      icon: "metalbolicboost",
      effect: "机械跳虫的移动速度提高60%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.6,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 148,
      unit: "Mecha Zergling",
      commander: "Stetmann",
      name: "合成肾上腺泵",
      icon: "syntheticadrenalpumps",
      effect: "机械跳虫的攻击速度提高100%。每次攻击消耗1点艾能。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 149,
      unit: "Mecha Baneling",
      commander: "Stetmann",
      name: "反向心火箭伺服器",
      icon: "anticentripetalrocketservos",
      effect: "机械爆虫的移动速度提高15%，并可跃向敌方单位。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.15,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 150,
      unit: "Mecha Hydralisk",
      commander: "Stetmann",
      name: "刺蛇液压强化",
      icon: "hydralicaugments",
      effect: "机械刺蛇的移动速度提高50%。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 151,
      unit: "Mecha Hydralisk",
      commander: "Stetmann",
      name: "提尔级瞄准系统",
      icon: "tyrclasstargetingsystem",
      effect: "机械刺蛇的对空武器射程提高3。",
      modifier: "Range",
      modifiermode: "(Erudition Missiles)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 152,
      unit: "Bunker",
      commander: "Raynor",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 153,
      unit: "Hydralisk",
      commander: "Kerrigan",
      name: "狂暴",
      icon: "frenzy",
      effect: "刺蛇的攻击速度提高50%，持续15秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 154,
      unit: "Aegis Guard",
      commander: "Mengsk",
      name: "高级兴奋剂",
      icon: "highgradestimpacks",
      effect: "攻击速度提高200%，持续10秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 155,
      unit: "Shock Division",
      commander: "Mengsk",
      name: "2",
      icon: "veterancy",
      effect: "攻城模式下的视野和攻击射程提高2。",
      modifier: "Range",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 156,
      unit: "Blackhammer",
      commander: "Mengsk",
      name: "2",
      icon: "veterancy",
      effect: "监视模式的射程提高2。",
      modifier: "Range",
      modifiermode: "(Overwatch Mode)",
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 157,
      unit: "Blackhammer",
      commander: "Mengsk",
      name: "3",
      icon: "veterancy",
      effect: "监视模式下的攻击速度提高33%。",
      modifier: "Attack_Speed",
      modifiermode: "(Overwatch Mode)",
      modifiertag: null,
      value: 1.33,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 158,
      unit: "Sky Fury",
      commander: "Mengsk",
      name: "阿萨神族涡轮机",
      icon: "aesirturbines",
      effect: "苍穹之怒的移动速度提高55%。",
      modifier: "Move_Speed",
      modifiermode: "(Fighter Mode)",
      modifiertag: null,
      value: 1.5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 159,
      unit: "Imperial Intercessor",
      commander: "Mengsk",
      name: "点燃加力燃烧室",
      icon: "igniteafterburners",
      effect: "该单位的移动速度提高70%，持续8秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.7,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 160,
      unit: "Earthsplitter Ordnance",
      commander: "Mengsk",
      name: "新钢强化装甲",
      icon: "neosteelfortifiedarmor",
      effect: "补给地堡、导弹塔和裂地者大炮的生命值提高200、护甲提高2。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 161,
      unit: "Earthsplitter Ordnance",
      commander: "Mengsk",
      name: "新钢强化装甲",
      icon: "neosteelfortifiedarmor",
      effect: "补给地堡、导弹塔和裂地者大炮的生命值提高200、护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 162,
      unit: "Missile Turret",
      commander: "Mengsk",
      name: "新钢强化装甲",
      icon: "neosteelfortifiedarmor",
      effect: "补给地堡、导弹塔和裂地者大炮的生命值提高200、护甲提高2。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 163,
      unit: "Missile Turret",
      commander: "Mengsk",
      name: "新钢强化装甲",
      icon: "neosteelfortifiedarmor",
      effect: "补给地堡、导弹塔和裂地者大炮的生命值提高200、护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 164,
      unit: "Earthsplitter Ordnance",
      commander: "Mengsk",
      name: "半球加速剂",
      icon: "hemisphericaccelerants",
      effect: "裂地者大炮的轰击技能射程提高25。",
      modifier: "Range",
      modifiermode: null,
      modifiertag: null,
      value: 25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 165,
      unit: "Imperial Intercessor",
      commander: "Mengsk",
      name: "散射帷幕",
      icon: "scatterveil",
      effect: "使帝国仲裁者永久隐形，并获得可吸收100点伤害的护盾。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 100,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 166,
      unit: "Mecha Overlord",
      commander: "Stetmann",
      name: "气动机身",
      icon: "pneumatizedfuselage",
      effect: "提高机械领主和机械监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 167,
      unit: "Mecha Overseer",
      commander: "Stetmann",
      name: "气动机身",
      icon: "pneumatizedfuselage",
      effect: "提高机械领主和机械监察王虫的移动速度。",
      modifier: "Move_Speed",
      modifiermode: "(Normal)",
      modifiertag: null,
      value: 3.38,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 168,
      unit: "Brood Lord",
      commander: "Kerrigan",
      name: "多孔软骨",
      icon: "porouscartilage",
      effect: "巢虫领主的移动速度提高75%，生命值提高100。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 100,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 169,
      unit: "Wrathwalker",
      commander: "Alarak",
      name: "快速能量循环",
      icon: "rapidpowercycling",
      effect: "缩短天罚行者蓄力轰击的充能时间和武器周期。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 170,
      unit: "Hellbat",
      commander: "Horner",
      name: "野火炸药",
      icon: "wildfireexplosives",
      effect: "恶火战车移动速度提高50%。恶火战车被摧毁时会点燃周围区域，火焰中的敌人因恐惧而乱跑3秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 171,
      unit: "Missile Turret",
      commander: "Raynor",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 172,
      unit: "Missile Turret",
      commander: "Nova",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 173,
      unit: "Colossus",
      commander: "Karax",
      name: "烈焰光束",
      icon: "firebeam",
      effect: "提高巨像造成的伤害，并使其攻击点燃地面，在5秒内对区域内的敌方地面单位额外造成150点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 175,
      unit: "Kev Rattlesnake West",
      commander: "Tychus",
      name: "秘密储藏兴奋剂",
      icon: "secretstashstimpack",
      effect: "每秒为响尾蛇恢复2点生命值，并提高其攻击速度和移动速度，持续15秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 176,
      unit: "Kev Rattlesnake West",
      commander: "Tychus",
      name: "秘密储藏兴奋剂",
      icon: "secretstashstimpack",
      effect: "每秒为响尾蛇恢复2点生命值，并提高其攻击速度和移动速度，持续15秒。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.47,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 178,
      unit: "Explosive Creeper",
      commander: "Dehaka",
      name: "空中爆裂囊",
      icon: "aerialburstsacs",
      effect: "使蠕行宿主的蠕行虫能够攻击空中单位，并提高其移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.75,
      operation: "add",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 179,
      unit: "Zealot",
      commander: "Artanis",
      name: "冲锋",
      icon: "charge",
      effect: "使狂热者能够拦截附近的敌人，并提高狂热者的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 180,
      unit: "Centurion",
      commander: "Vorazun",
      name: "暗影冲锋",
      icon: "shadowcharge",
      effect: "使百夫长能够拦截附近的敌人，并提高其移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 181,
      unit: "Sentinel",
      commander: "Karax",
      name: "冲锋",
      icon: "charge",
      effect: "使哨兵能够拦截附近的敌人，并提高哨兵的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 182,
      unit: "Legionnaire",
      commander: "Fenix",
      name: "冲锋",
      icon: "charge",
      effect: "使军团士兵能够拦截附近的敌人，并提高军团士兵的移动速度。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 0.25,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 183,
      unit: "Carrier",
      commander: "Karax",
      name: "引力折跃弹射器",
      icon: "gravitonwarpcatapult",
      effect: "使航母更快放出拦截机，并使拦截机的攻击速度提高25%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2.25,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 184,
      unit: "Primal Mutalisk",
      commander: "Dehaka",
      name: "切割飞刃",
      icon: "slicingglaive",
      effect: "原始异龙对空中单位造成的伤害提高100%。",
      modifier: "damage",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 186,
      unit: "Sovereign Battlecruiser",
      commander: "Horner",
      name: "超载反应堆",
      icon: "overchargedreactor",
      effect: "将战列巡航舰的武器系统升级为强力粒子炮，每次攻击造成200点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "set",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 187,
      unit: "Sovereign Battlecruiser",
      commander: "Horner",
      name: "超载反应堆",
      icon: "overchargedreactor",
      effect: "将战列巡航舰的武器系统升级为强力粒子炮，每次攻击造成200点伤害。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "set",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 188,
      unit: "Sovereign Battlecruiser",
      commander: "Horner",
      name: "超载反应堆",
      icon: "overchargedreactor",
      effect: "将战列巡航舰的武器系统升级为强力粒子炮，每次攻击造成200点伤害。",
      modifier: "attackbonus",
      modifiermode: null,
      modifiertag: null,
      value: 20,
      operation: "set",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 189,
      unit: "Explosive Creeper",
      commander: "Dehaka",
      name: "空中爆裂囊",
      icon: "aerialburstsacs",
      effect: "使蠕行宿主的蠕行虫能够攻击空中单位，并提高其移动速度。",
      modifier: "damage",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 110,
      operation: "set",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 192,
      unit: "Explosive Creeper",
      commander: "Dehaka",
      name: "空中爆裂囊",
      icon: "aerialburstsacs",
      effect: "使蠕行宿主的蠕行虫能够攻击空中单位，并提高其移动速度。",
      modifier: "attackbonus",
      modifiermode: "(Air)",
      modifiertag: null,
      value: 5,
      operation: "set",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 193,
      unit: "Volatile Infested",
      commander: "Stukov",
      name: "酸性酶",
      icon: "acidicenzymes",
      effect: "感染攻城坦克在两种模式下对重甲单位和建筑额外造成15点伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Structure",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 194,
      unit: "Infested Siege Tank",
      commander: "Stukov",
      name: "酸性酶",
      icon: "acidicenzymes",
      effect: "感染攻城坦克在两种模式下对重甲单位和建筑额外造成15点伤害。",
      modifier: "damage",
      modifiermode: "(Rooted)",
      modifiertag: "Structure",
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 195,
      unit: "Sky Fury",
      commander: "Mengsk",
      name: "1",
      icon: "veterancy",
      effect: "对重型目标造成额外伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: "Massive",
      value: 50,
      operation: "add",
      upgradetype: "preupgrade"
    },
    {
      upgradeid: 196,
      unit: "Wraith",
      commander: "Swann",
      name: "位移力场",
      icon: "displacementfield",
      effect: "怨灵隐形时移动速度提高20%，并闪避20%的来袭攻击。",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 197,
      unit: "Railgun Turret",
      commander: "Nova",
      name: "建筑装甲",
      icon: "structurearmor",
      effect: "建筑的护甲提高2。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 198,
      unit: "Vulture",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 199,
      unit: "Siege Tank",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 200,
      unit: "Viking",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 201,
      unit: "Banshee",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 202,
      unit: "Battlecruiser",
      commander: "Raynor",
      name: "加力燃烧室",
      icon: "afterburners",
      effect: "载具和舰船获得加力燃烧室，激活后使单位移动速度提高100%，持续8秒。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 203,
      unit: "Ravasaur",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 204,
      unit: "Ravasaur",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 205,
      unit: "Primal Igniter",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 206,
      unit: "Primal Igniter",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 207,
      unit: "Primal Guardian",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 208,
      unit: "Primal Guardian",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 209,
      unit: "Primal Mutalisk",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 210,
      unit: "Primal Mutalisk",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 211,
      unit: "Impaler",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 212,
      unit: "Impaler",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 213,
      unit: "Tyrannozor",
      commander: "Dehaka",
      name: "基因突变：肾上腺",
      icon: "adrenalglands",
      effect: "该单位的攻击速度提高20%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 214,
      unit: "Tyrannozor",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 215,
      unit: "Creeper Host",
      commander: "Dehaka",
      name: "基因突变：甲壳",
      icon: "carapace",
      effect: "该单位的生命值提高50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 216,
      unit: "Roach",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、5点护甲和100%生物吸取。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 217,
      unit: "Roach",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、5点护甲和100%生物吸取。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 218,
      unit: "Roach",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、5点护甲和100%生物吸取。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 5,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 219,
      unit: "Ravager",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取，腐蚀胆汁冷却时间缩短50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 220,
      unit: "Ravager",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取，腐蚀胆汁冷却时间缩短50%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 221,
      unit: "Swarm Host",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值，生成蝗虫的冷却时间缩短50%。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 222,
      unit: "Locust",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 223,
      unit: "Locust",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 224,
      unit: "Mutalisk",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 225,
      unit: "Mutalisk",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 226,
      unit: "Guardian",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 227,
      unit: "Guardian",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 228,
      unit: "Devourer",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 229,
      unit: "Devourer",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度和100%生物吸取。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 230,
      unit: "Viper",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取和500%能量恢复速度。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 231,
      unit: "Viper",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取和500%能量恢复速度。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 232,
      unit: "Swarm Queen",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取和500%能量恢复速度。",
      modifier: "HP",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 233,
      unit: "Swarm Queen",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值、100%攻击速度、100%生物吸取和500%能量恢复速度。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 234,
      unit: "Super Gary",
      commander: "Stetmann",
      name: "极品机油",
      icon: "thebestoil",
      effect: "超级盖瑞吸收机械残骸时，攻击速度提高10%，每秒额外恢复1点生命值，持续30秒。最多叠加20次。被动技能。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 235,
      unit: "Primal Guardian",
      commander: "Dehaka",
      name: "原始狂怒",
      icon: "primordialfury",
      effect: "原始守护者每次攻击暂时使攻击速度提高10%，最多叠加至50%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 236,
      unit: "Kerrigan",
      commander: "Kerrigan",
      name: "狂怒",
      icon: "fury",
      effect: "凯瑞甘每次攻击使攻击速度提高10%，最多提高50%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 237,
      unit: "Kaldalis",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 238,
      unit: "Kaldalis",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 239,
      unit: "Talis",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 240,
      unit: "Talis",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 241,
      unit: "Taldarin",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 242,
      unit: "Taldarin",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 243,
      unit: "Warbringer",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 244,
      unit: "Warbringer",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 245,
      unit: "Mojo",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 246,
      unit: "Mojo",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 247,
      unit: "Clolarion",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 3,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 248,
      unit: "Clolarion",
      commander: "Fenix",
      name: "复仇协议",
      icon: "avengingprotocol",
      effect: "每当同类型宿主躯壳被摧毁时，勇士获得攻击速度和移动速度；转移到新宿主躯壳时获得50%速度加成。速度加成最多叠加至200%，若未刷新则持续20秒。 ",
      modifier: "Move_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 250,
      unit: "Swarm Host",
      commander: "Abathur",
      name: "最大生物质",
      icon: "biomass",
      effect: "获得300%生命值，生成蝗虫的冷却时间缩短50%。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 251,
      unit: "Rob Cannonball Boswell",
      commander: "Tychus",
      name: "红线能量电池",
      icon: "redlinepowercells",
      effect: "炮弹每次攻击使攻击速度提高3%，最多提高60%；每次攻击还使攻击伤害提高3，最多提高60。",
      modifier: "Attack_Speed",
      modifiermode: null,
      modifiertag: null,
      value: 1.8,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 253,
      unit: "Tychus Findlay",
      commander: "Tychus",
      name: "神射手联网头盔",
      icon: "sureshotnetworkedhelm",
      effect: "泰凯斯附近每有一名歹徒，其武器伤害提高20%。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 1.8,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 254,
      unit: "Siege Tank",
      commander: "Raynor",
      name: "高级攻城技术",
      icon: "advancedsiegetech",
      effect: "攻城坦克的变形时间缩短50%，攻城模式下获得3点护甲。",
      modifier: "Armor",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 3,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 255,
      unit: "Nova",
      commander: "Nova",
      name: "姿态切换",
      icon: "stancedance",
      effect: "切换至隐秘模式时暂时无敌，切换至突击模式时暂时提高造成的伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 256,
      unit: "Roach",
      commander: "Abathur",
      name: "自适应装甲",
      icon: "adaptiveplating",
      effect: "蟑螂生命值低于50%时获得6点护甲。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 6,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 257,
      unit: "Sky Fury",
      commander: "Mengsk",
      name: "战术重整",
      icon: "tacticalrealignment",
      effect: "变形后，该单位的攻击伤害提高50%，持续5秒。此效果每15秒最多触发一次。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 1.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 258,
      unit: "Ascendant",
      commander: "Alarak",
      name: "势不可挡",
      icon: "poweroverwhelming",
      effect: "升格者每次使用牺牲时，永久获得25%技能伤害和100点护盾。此效果最多叠加10次。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 1000,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 259,
      unit: "Nux",
      commander: "Tychus",
      name: "闪击部队GDM目镜",
      icon: "flashforcegdmvisor",
      effect: "使维嘉、努克斯和尼卡拉中尉获得侦测能力，可以发现隐形和潜地的敌方单位。",
      modifier: "Vision",
      modifiermode: null,
      modifiertag: null,
      value: 0,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 260,
      unit: "Lt Layna Nikara",
      commander: "Tychus",
      name: "闪击部队GDM目镜",
      icon: "flashforcegdmvisor",
      effect: "使维嘉、努克斯和尼卡拉中尉获得侦测能力，可以发现隐形和潜地的敌方单位。",
      modifier: "Vision",
      modifiermode: null,
      modifiertag: null,
      value: 0,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 261,
      unit: "Vega",
      commander: "Tychus",
      name: "闪击部队GDM目镜",
      icon: "flashforcegdmvisor",
      effect: "使维嘉、努克斯和尼卡拉中尉获得侦测能力，可以发现隐形和潜地的敌方单位。",
      modifier: "Vision",
      modifiermode: null,
      modifiertag: null,
      value: 0,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 262,
      unit: "Shock Division",
      commander: "Mengsk",
      name: "武器稳定器",
      icon: "armamentstabilizers",
      effect: "使攻城模式下的震撼部队被帝国仲裁者搭载时，能够以较低射速攻击空中单位。",
      modifier: "Attack_Speed",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 0.67,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 263,
      unit: "Covert Banshee",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 264,
      unit: "Elite Marine",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 265,
      unit: "Heavy Siege Tank",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 266,
      unit: "Hellbat Ranger",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 267,
      unit: "Hellion Ranger",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 268,
      unit: "Marauder Commando",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 269,
      unit: "Raid Liberator",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 270,
      unit: "Raven Type II",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 271,
      unit: "Spec Ops Ghost",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 272,
      unit: "Strike Goliath",
      commander: "Nova",
      name: "财富战士",
      icon: "soldieroffortune",
      effect: "建造的第一座生产建筑累积单位充能的速度提高100%；第二和第三座生产建筑的累积速度降低50%。",
      modifier: "time",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 273,
      unit: "Crooked Sam",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 274,
      unit: "Crooked Sam",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 275,
      unit: "James Sirius Sykes",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 276,
      unit: "James Sirius Sykes",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 277,
      unit: "Miles Blaze Lewis",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 278,
      unit: "Miles Blaze Lewis",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 279,
      unit: "Rob Cannonball Boswell",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 280,
      unit: "Rob Cannonball Boswell",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 281,
      unit: "Vega",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 282,
      unit: "Vega",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 283,
      unit: "Nux",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 284,
      unit: "Nux",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 285,
      unit: "Lt Layna Nikara",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 286,
      unit: "Lt Layna Nikara",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 287,
      unit: "Kev Rattlesnake West",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "mineralCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 288,
      unit: "Kev Rattlesnake West",
      commander: "Tychus",
      name: "首位免费",
      icon: "firstonesonthehouse",
      effect: "泰凯斯招募第一名歹徒所需的晶体矿和高能瓦斯减少50%。 ",
      modifier: "vespeneCost",
      modifiermode: null,
      modifiertag: null,
      value: 0.5,
      operation: "multiply",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 289,
      unit: "Brutalisk",
      commander: "Abathur",
      name: "共生体",
      icon: "symbiote",
      effect: "获得一个共生体，可攻击附近敌人并提供护壳。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 290,
      unit: "Leviathan",
      commander: "Abathur",
      name: "共生体",
      icon: "symbiote",
      effect: "获得一个共生体，可攻击附近敌人并提供护壳。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 291,
      unit: "Nova",
      commander: "Nova",
      name: "闪现",
      icon: "blink",
      effect: "将诺娃传送到附近位置，并使其获得可吸收最多200点伤害的临时护盾，持续8秒。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 292,
      unit: "Kerrigan",
      commander: "Kerrigan",
      name: "变异甲壳",
      icon: "mutatingcarapace",
      effect: "凯瑞甘造成伤害时获得临时生命值。",
      modifier: "Shields",
      modifiermode: null,
      modifiertag: null,
      value: 200,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 293,
      unit: "Infested Liberator",
      commander: "Stukov",
      name: "云雾扩散",
      icon: "clouddispersal",
      effect: "感染解放者攻击时立即化为微生物云，受到的伤害降低85%。",
      modifier: "Hits",
      modifiermode: null,
      modifiertag: null,
      value: 1,
      operation: "set",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 294,
      unit: "Hellbat Ranger",
      commander: "Nova",
      name: "跳跃喷射突击",
      icon: "jumpjetassault",
      effect: "使恶火游侠冲向附近的敌方地面单位，命中时短暂击晕敌人并获得4点护甲。",
      modifier: "Armor",
      modifiermode: null,
      modifiertag: null,
      value: 4,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 295,
      unit: "Shock Division",
      commander: "Mengsk",
      name: "2",
      icon: "veterancy",
      effect: "攻城模式下的视野和攻击射程提高2。",
      modifier: "Vision",
      modifiermode: "(Siege Mode)",
      modifiertag: null,
      value: 2,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 296,
      unit: "Clolarion",
      commander: "Fenix",
      name: "最大战术数据网",
      icon: "tacticaldataweb",
      effect: "每有一艘联网航母，拦截者的伤害提高3，最多提高10。",
      modifier: "damage",
      modifiermode: "(Interdictor)",
      modifiertag: null,
      value: 10,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 298,
      unit: "Fenix Cybros Arbiter",
      commander: "Fenix",
      name: "净化者武装",
      icon: "purifierarmaments",
      effect: "菲尼克斯的所有战甲攻击伤害提高15。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 299,
      unit: "Fenix Solarite Dragoon",
      commander: "Fenix",
      name: "净化者武装",
      icon: "purifierarmaments",
      effect: "菲尼克斯的所有战甲攻击伤害提高15。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 15,
      operation: "add",
      upgradetype: "upgrade"
    },
    {
      upgradeid: 300,
      unit: "Slayer",
      commander: "Alarak",
      name: "相位闪现",
      icon: "phaseblink",
      effect: "使杀戮者传送至附近目标位置。使用相位闪现后，杀戮者在8秒内的下一次攻击造成双倍伤害。",
      modifier: "damage",
      modifiermode: null,
      modifiertag: null,
      value: 2,
      operation: "multiply",
      upgradetype: "upgrade"
    }
  ];
  // translation/glossary.json
  var glossary_default = {
    commanders: [
      {
        en: "Abathur",
        "zh-CN": "阿巴瑟",
        aliases: [
          "Abathur"
        ]
      },
      {
        en: "Alarak",
        "zh-CN": "阿拉纳克",
        aliases: [
          "Alarak"
        ]
      },
      {
        en: "Artanis",
        "zh-CN": "阿塔尼斯",
        aliases: [
          "Artanis"
        ]
      },
      {
        en: "Dehaka",
        "zh-CN": "德哈卡",
        aliases: [
          "Dehaka"
        ]
      },
      {
        en: "Fenix",
        "zh-CN": "菲尼克斯",
        aliases: [
          "Fenix"
        ]
      },
      {
        en: "Han and Horner",
        "zh-CN": "汉与霍纳",
        aliases: [
          "Han and Horner"
        ]
      },
      {
        en: "Karax",
        "zh-CN": "凯拉克斯",
        aliases: [
          "Karax"
        ]
      },
      {
        en: "Kerrigan",
        "zh-CN": "凯瑞甘",
        aliases: [
          "Kerrigan"
        ]
      },
      {
        en: "Mengsk",
        "zh-CN": "蒙斯克",
        aliases: [
          "Mengsk"
        ]
      },
      {
        en: "Nova",
        "zh-CN": "诺娃",
        aliases: [
          "Nova"
        ]
      },
      {
        en: "Raynor",
        "zh-CN": "雷诺",
        aliases: [
          "Raynor"
        ]
      },
      {
        en: "Stetmann",
        "zh-CN": "斯台特曼",
        aliases: [
          "Stetmann"
        ]
      },
      {
        en: "Stukov",
        "zh-CN": "斯托科夫",
        aliases: [
          "Stukov"
        ]
      },
      {
        en: "Swann",
        "zh-CN": "斯旺",
        aliases: [
          "Swann"
        ]
      },
      {
        en: "Tychus",
        "zh-CN": "泰凯斯",
        aliases: [
          "Tychus"
        ]
      },
      {
        en: "Vorazun",
        "zh-CN": "沃拉尊",
        aliases: [
          "Vorazun"
        ]
      },
      {
        en: "Zagara",
        "zh-CN": "扎加拉",
        aliases: [
          "Zagara"
        ]
      },
      {
        en: "Zeratul",
        "zh-CN": "泽拉图",
        aliases: [
          "Zeratul"
        ]
      }
    ],
    commander_terms: [
      { en: "Biomass", "zh-CN": "生物质", aliases: ["Biomass"] },
      { en: "Ultimate Evolution", "zh-CN": "终极进化", aliases: ["Ultimate Evolution"] },
      { en: "Toxic Nest", "zh-CN": "剧毒巢穴", aliases: ["Toxic Nest"] },
      { en: "Brutalisk", "zh-CN": "莽兽", aliases: ["Brutalisk"] },
      { en: "Leviathan", "zh-CN": "利维坦", aliases: ["Leviathan"] },
      { en: "Corrosive Bile", "zh-CN": "腐蚀胆汁", aliases: ["Corrosive Bile"] },
      { en: "Deep Tunnel", "zh-CN": "深槽虫道", aliases: ["Deep Tunnel"] },
      { en: "Disabling Cloud", "zh-CN": "蔽目毒云", aliases: ["Disabling Cloud"] },
      { en: "Parasitic Bomb", "zh-CN": "寄生炸弹", aliases: ["Parasitic Bomb"] },
      { en: "Essence", "zh-CN": "精华", aliases: ["Essence"] },
      { en: "Greater Primal Wurm", "zh-CN": "巨型原始蠕虫", aliases: ["Greater Primal Wurm"] },
      { en: "Primal Pack Leader", "zh-CN": "原始族群首领", aliases: ["Primal Pack Leader"] },
      { en: "Intimidating Roar", "zh-CN": "威吓咆哮", aliases: ["Intimidating Roar"] },
      { en: "Scorching Breath", "zh-CN": "灼热吐息", aliases: ["Scorching Breath"] },
      { en: "Spear of Adun", "zh-CN": "亚顿之矛", aliases: ["Spear of Adun"] },
      { en: "Orbital Strike", "zh-CN": "轨道轰炸", aliases: ["Orbital Strike"] },
      { en: "Solar Lance", "zh-CN": "太阳能长枪", aliases: ["Solar Lance"] },
      { en: "Purifier Beam", "zh-CN": "净化光束", aliases: ["Purifier Beam"] },
      { en: "Chrono Boost", "zh-CN": "时空提速", aliases: ["Chrono Boost"] },
      { en: "Guardian Shell", "zh-CN": "守护之壳", aliases: ["Guardian Shell"] },
      { en: "Emergency Recall", "zh-CN": "紧急召回", aliases: ["Emergency Recall"] },
      { en: "Time Stop", "zh-CN": "时间停止", aliases: ["Time Stop"] },
      { en: "Shadow Guard", "zh-CN": "暗影卫队", aliases: ["Shadow Guard"] },
      { en: "Dark Pylon", "zh-CN": "黑暗水晶塔", aliases: ["Dark Pylon"] },
      { en: "Infested Civilian", "zh-CN": "被感染的平民", aliases: ["Infested Civilian"] },
      { en: "Infested Marine", "zh-CN": "被感染的陆战队员", aliases: ["Infested Marine"] },
      { en: "Explosive Infested", "zh-CN": "易爆感染体", aliases: ["Explosive Infested"] },
      { en: "Stetellite", "zh-CN": "艾星", aliases: ["Stetellite"] },
      { en: "Stetzone", "zh-CN": "爱心区域", aliases: ["Stetzone"] },
      { en: "Egonergy", "zh-CN": "艾能", aliases: ["Egonergy"] },
      { en: "Xel'Naga Shieldguard", "zh-CN": "萨尔纳加光盾卫士", aliases: ["Xel'Naga Shieldguard"] },
      { en: "Xel'Naga Enforcer", "zh-CN": "萨尔纳加执行者", aliases: ["Xel'Naga Enforcer"] },
      { en: "Xel'Naga Ambusher", "zh-CN": "萨尔纳加伏击者", aliases: ["Xel'Naga Ambusher"] },
      { en: "Xel'Naga Watcher", "zh-CN": "萨尔纳加观察者", aliases: ["Xel'Naga Watcher"] },
      { en: "Void Array", "zh-CN": "虚空阵列船", aliases: ["Void Array"] },
      { en: "Shadow Cleave", "zh-CN": "暗影顺劈", aliases: ["Shadow Cleave"] },
      { en: "Void Seeker", "zh-CN": "虚空寻觅者号", aliases: ["Void Seeker"] },
      { en: "Anakh'Sun", "zh-CN": "黎明使徒", aliases: ["Anakh'Sun"] },
      { en: "Knowledge Seeker", "zh-CN": "知识探求者", aliases: ["Knowledge Seeker"] },
      { en: "Herald of the Void", "zh-CN": "虚空先驱", aliases: ["Herald of the Void"] }
    ],
    missions: [
      {
        en: "Chain of Ascension",
        "zh-CN": "升格之链",
        aliases: [
          "Chain of Ascension"
        ]
      },
      {
        en: "Cradle of Death",
        "zh-CN": "死亡摇篮",
        aliases: [
          "Cradle of Death"
        ]
      },
      {
        en: "Dead of Night",
        "zh-CN": "求生无路",
        aliases: [
          "Dead of Night",
          "亡者之夜"
        ]
      },
      {
        en: "Lock & Load",
        "zh-CN": "天界封锁",
        aliases: [
          "Lock & Load",
          "天锁"
        ]
      },
      {
        en: "Malwarfare",
        "zh-CN": "净网行动",
        aliases: [
          "Malwarfare",
          "恶意代码"
        ]
      },
      {
        en: "Miner Evacuation",
        "zh-CN": "营救矿工",
        aliases: [
          "Miner Evacuation",
          "疏散矿工"
        ]
      },
      {
        en: "Mist Opportunities",
        "zh-CN": "机会渺茫",
        aliases: [
          "Mist Opportunities"
        ]
      },
      {
        en: "Oblivion Express",
        "zh-CN": "湮灭快车",
        aliases: [
          "Oblivion Express"
        ]
      },
      {
        en: "Part and Parcel",
        "zh-CN": "聚铁成兵",
        aliases: [
          "Part and Parcel"
        ]
      },
      {
        en: "Rifts to Korhal",
        "zh-CN": "克哈裂痕",
        aliases: [
          "Rifts to Korhal"
        ]
      },
      {
        en: "Scythe of Amon",
        "zh-CN": "黑暗杀星",
        aliases: [
          "Scythe of Amon",
          "埃蒙之镰"
        ]
      },
      {
        en: "Temple of the Past",
        "zh-CN": "往日神庙",
        aliases: [
          "Temple of the Past"
        ]
      },
      {
        en: "The Vermillion Problem",
        "zh-CN": "熔火危机",
        aliases: [
          "The Vermillion Problem"
        ]
      },
      {
        en: "Void Launch",
        "zh-CN": "虚空降临",
        aliases: [
          "Void Launch"
        ]
      },
      {
        en: "Void Thrashing",
        "zh-CN": "虚空撕裂",
        aliases: [
          "Void Thrashing"
        ]
      }
    ],
    mission_terms: [
      { en: "Mission Summary", "zh-CN": "任务概述", aliases: ["Mission Summary"] },
      { en: "Primary Objective", "zh-CN": "主要目标", aliases: ["Primary Objective"] },
      { en: "Secondary Objective", "zh-CN": "奖励目标", aliases: ["Secondary Objective"] },
      { en: "Bonus Objective", "zh-CN": "奖励目标", aliases: ["Bonus Objective"] },
      { en: "Enemy Base Analysis", "zh-CN": "敌方基地分析", aliases: ["Enemy Base Analysis"] },
      { en: "Attack Wave", "zh-CN": "进攻波次", aliases: ["Attack Wave"] },
      { en: "Spawn Point", "zh-CN": "出生点", aliases: ["Spawn Point"] },
      { en: "Tech Level", "zh-CN": "科技等级", aliases: ["Tech Level"] },
      { en: "Strength Level", "zh-CN": "强度等级", aliases: ["Strength Level"] },
      { en: "Main Base", "zh-CN": "主基地", aliases: ["Main Base"] },
      { en: "Expansion", "zh-CN": "分矿", aliases: ["Expansion"] },
      { en: "Hybrid", "zh-CN": "混合体", aliases: ["Hybrid"] },
      { en: "Hybrid Destroyer", "zh-CN": "混合体毁灭者", aliases: ["Hybrid Destroyer"] },
      { en: "Hybrid Reaver", "zh-CN": "混合体掠夺者", aliases: ["Hybrid Reaver"] },
      { en: "Hybrid Dominator", "zh-CN": "混合体支配者", aliases: ["Hybrid Dominator"] },
      { en: "Hybrid Behemoth", "zh-CN": "混合体巨兽", aliases: ["Hybrid Behemoth"] },
      { en: "Xel'Naga Shrine", "zh-CN": "萨尔纳加神殿", aliases: ["Xel'Naga Shrine"] },
      { en: "Void Thrasher", "zh-CN": "虚空撕裂者", aliases: ["Void Thrasher"] },
      { en: "Warp Conduit", "zh-CN": "折跃通道", aliases: ["Warp Conduit"] },
      { en: "Research Vessel", "zh-CN": "科学船", aliases: ["Research Vessel"] },
      { en: "Xenon Crystal", "zh-CN": "氙晶体", aliases: ["Xenon Crystal"] },
      { en: "Molten Salamander", "zh-CN": "熔岩蜥蜴", aliases: ["Molten Salamander"] },
      { en: "Void Sliver", "zh-CN": "虚空裂片", aliases: ["Void Sliver"] },
      { en: "Hybrid Nemesis", "zh-CN": "混合体天罚者", aliases: ["Hybrid Nemesis"] },
      { en: "Celestial Lock", "zh-CN": "天锁", aliases: ["Celestial Lock"] }
    ],
    mutators: [
      {
        en: "Afraid of the Dark",
        "zh-CN": "极度谨慎",
        aliases: [
          "Afraid of the Dark"
        ]
      },
      {
        en: "Aggressive Deployment",
        "zh-CN": "进攻部署",
        aliases: [
          "Aggressive Deployment",
          "强势部署"
        ]
      },
      {
        en: "Alien Incubation",
        "zh-CN": "异形寄生",
        aliases: [
          "Alien Incubation",
          "异形孵化"
        ]
      },
      {
        en: "Avenger",
        "zh-CN": "复仇战士",
        aliases: [
          "Avenger"
        ]
      },
      {
        en: "Barrier",
        "zh-CN": "减伤屏障",
        aliases: [
          "Barrier"
        ]
      },
      {
        en: "Black Death",
        "zh-CN": "黑死病",
        aliases: [
          "Black Death",
          "黑死病"
        ]
      },
      {
        en: "Blizzard",
        "zh-CN": "暴风雪",
        aliases: [
          "Blizzard"
        ]
      },
      {
        en: "Chaos Studios",
        "zh-CN": "混乱工作室",
        aliases: [
          "Chaos Studios",
          "混乱工作室"
        ]
      },
      {
        en: "Concussive Attacks",
        "zh-CN": "震荡攻击",
        aliases: [
          "Concussive Attacks"
        ]
      },
      {
        en: "Darkness",
        "zh-CN": "暗无天日",
        aliases: [
          "Darkness",
          "黑暗"
        ]
      },
      {
        en: "Diffusion",
        "zh-CN": "伤害散射",
        aliases: [
          "Diffusion",
          "扩散"
        ]
      },
      {
        en: "Double Edged",
        "zh-CN": "双重压力",
        aliases: [
          "Double Edged",
          "双刃剑"
        ]
      },
      {
        en: "Eminent Domain",
        "zh-CN": "强行征用",
        aliases: [
          "Eminent Domain",
          "强占地盘"
        ]
      },
      {
        en: "Evasive Maneuvers",
        "zh-CN": "闪避机动",
        aliases: [
          "Evasive Maneuvers",
          "闪避机动"
        ]
      },
      {
        en: "Fatal Attraction",
        "zh-CN": "致命勾引",
        aliases: [
          "Fatal Attraction",
          "致命吸引"
        ]
      },
      {
        en: "Fear",
        "zh-CN": "无边恐惧",
        aliases: [
          "Fear"
        ]
      },
      {
        en: "Fireworks",
        "zh-CN": "焰火秀",
        aliases: [
          "Fireworks"
        ]
      },
      {
        en: "Gift Exchange",
        "zh-CN": "礼尚往来",
        aliases: [
          "Gift Exchange",
          "礼物交换"
        ]
      },
      {
        en: "Going Nuclear",
        "zh-CN": "核弹打击",
        aliases: [
          "Going Nuclear",
          "核弹来袭"
        ]
      },
      {
        en: "Hardened Will",
        "zh-CN": "坚强意志",
        aliases: [
          "Hardened Will"
        ]
      },
      {
        en: "Heroes from the Storm",
        "zh-CN": "风暴英雄",
        aliases: [
          "Heroes from the Storm"
        ]
      },
      {
        en: "Inspiration",
        "zh-CN": "鼓舞人心",
        aliases: [
          "Inspiration"
        ]
      },
      {
        en: "Just Die",
        "zh-CN": "给我死吧！",
        aliases: [
          "Just Die"
        ]
      },
      {
        en: "Kill Bots",
        "zh-CN": "杀戮机器人",
        aliases: [
          "Kill Bots"
        ]
      },
      {
        en: "Laser Drill",
        "zh-CN": "激光钻机",
        aliases: [
          "Laser Drill"
        ]
      },
      {
        en: "Lava Burst",
        "zh-CN": "岩浆爆发",
        aliases: [
          "Lava Burst"
        ]
      },
      {
        en: "Life Leech",
        "zh-CN": "生命吸取",
        aliases: [
          "Life Leech"
        ]
      },
      {
        en: "Long Range",
        "zh-CN": "超远视距",
        aliases: [
          "Long Range"
        ]
      },
      {
        en: "Lucky Envelopes",
        "zh-CN": "幸运红包",
        aliases: [
          "Lucky Envelopes",
          "幸运红包"
        ]
      },
      {
        en: "Mag-nificent",
        "zh-CN": "强磁雷场",
        aliases: [
          "Mag-nificent"
        ]
      },
      {
        en: "Micro Transactions",
        "zh-CN": "拿钱说话",
        aliases: [
          "Micro Transactions",
          "微交易"
        ]
      },
      {
        en: "Mineral Shields",
        "zh-CN": "晶矿护盾",
        aliases: [
          "Mineral Shields",
          "矿物护盾"
        ]
      },
      {
        en: "Minesweeper",
        "zh-CN": "扫雷专家",
        aliases: [
          "Minesweeper"
        ]
      },
      {
        en: "Missile Command",
        "zh-CN": "飞弹大战",
        aliases: [
          "Missile Command",
          "导弹指挥"
        ]
      },
      {
        en: "Moment of Silence",
        "zh-CN": "默哀",
        aliases: [
          "Moment of Silence"
        ]
      },
      {
        en: "Mutually Assured Destruction",
        "zh-CN": "相互摧毁",
        aliases: [
          "Mutually Assured Destruction",
          "相互保证毁灭"
        ]
      },
      {
        en: "Naughty List",
        "zh-CN": "杀生业报",
        aliases: [
          "Naughty List",
          "淘气名单"
        ]
      },
      {
        en: "Orbital Strike",
        "zh-CN": "轨道轰炸",
        aliases: [
          "Orbital Strike"
        ]
      },
      {
        en: "Outbreak",
        "zh-CN": "丧尸大战",
        aliases: [
          "Outbreak",
          "感染爆发"
        ]
      },
      {
        en: "Photon Overload",
        "zh-CN": "光子过载",
        aliases: [
          "Photon Overload"
        ]
      },
      {
        en: "Polarity",
        "zh-CN": "极性不定",
        aliases: [
          "Polarity"
        ]
      },
      {
        en: "Power Overwhelming",
        "zh-CN": "灵能爆表",
        aliases: [
          "Power Overwhelming",
          "势不可挡"
        ]
      },
      {
        en: "Propagators",
        "zh-CN": "同化体",
        aliases: [
          "Propagators",
          "传播者"
        ]
      },
      {
        en: "Purifier Beam",
        "zh-CN": "净化光束",
        aliases: [
          "Purifier Beam"
        ]
      },
      {
        en: "Random",
        "zh-CN": "随机",
        aliases: [
          "Random"
        ]
      },
      {
        en: "Scorched Earth",
        "zh-CN": "焦土政策",
        aliases: [
          "Scorched Earth",
          "焦土政策"
        ]
      },
      {
        en: "Self Destruction",
        "zh-CN": "自毁程序",
        aliases: [
          "Self Destruction",
          "自毁程序"
        ]
      },
      {
        en: "Sharing is Caring",
        "zh-CN": "补给共享",
        aliases: [
          "Sharing is Caring",
          "有福同享"
        ]
      },
      {
        en: "Shortsighted",
        "zh-CN": "短视症",
        aliases: [
          "Shortsighted",
          "近视眼"
        ]
      },
      {
        en: "Slim Pickings",
        "zh-CN": "小捞油水",
        aliases: [
          "Slim Pickings",
          "资源短缺"
        ]
      },
      {
        en: "Speed Freaks",
        "zh-CN": "速度狂魔",
        aliases: [
          "Speed Freaks"
        ]
      },
      {
        en: "Temporal Field",
        "zh-CN": "时空力场",
        aliases: [
          "Temporal Field"
        ]
      },
      {
        en: "Time Warp",
        "zh-CN": "时间扭曲",
        aliases: [
          "Time Warp"
        ]
      },
      {
        en: "Transmutation",
        "zh-CN": "力量蜕变",
        aliases: [
          "Transmutation",
          "转化"
        ]
      },
      {
        en: "Trick or Treat",
        "zh-CN": "不给糖果就捣蛋",
        aliases: [
          "Trick or Treat"
        ]
      },
      {
        en: "Turkey Shoot",
        "zh-CN": "捕杀火鸡",
        aliases: [
          "Turkey Shoot",
          "火鸡射击"
        ]
      },
      {
        en: "Twister",
        "zh-CN": "龙卷风暴",
        aliases: [
          "Twister",
          "龙卷风"
        ]
      },
      {
        en: "Vertigo",
        "zh-CN": "迷失方向",
        aliases: [
          "Vertigo"
        ]
      },
      {
        en: "Void Reanimators",
        "zh-CN": "虚空重生者",
        aliases: [
          "Void Reanimators",
          "虚空复生者"
        ]
      },
      {
        en: "Void Rifts",
        "zh-CN": "虚空裂隙",
        aliases: [
          "Void Rifts"
        ]
      },
      {
        en: "Walking Infested",
        "zh-CN": "行尸走肉",
        aliases: [
          "Walking Infested"
        ]
      },
      {
        en: "We Move Unseen",
        "zh-CN": "来去无踪",
        aliases: [
          "We Move Unseen",
          "隐形行动"
        ]
      },
      {
        en: "Boom Bots",
        "zh-CN": "炸弹机器人",
        aliases: [
          "Boom Bots"
        ]
      }
    ],
    races: [
      {
        en: "Terran",
        "zh-CN": "人类",
        aliases: [
          "Terran"
        ]
      },
      {
        en: "Zerg",
        "zh-CN": "异虫",
        aliases: [
          "Zerg"
        ]
      },
      {
        en: "Protoss",
        "zh-CN": "星灵",
        aliases: [
          "Protoss"
        ]
      }
    ],
    attributes: [
      {
        en: "Health",
        "zh-CN": "生命值",
        aliases: [
          "Health"
        ]
      },
      {
        en: "Shields",
        "zh-CN": "护盾",
        aliases: [
          "Shields"
        ]
      },
      {
        en: "Armor",
        "zh-CN": "护甲",
        aliases: [
          "Armor"
        ]
      },
      {
        en: "Damage",
        "zh-CN": "伤害",
        aliases: [
          "Damage"
        ]
      },
      {
        en: "Attack Speed",
        "zh-CN": "攻击速度",
        aliases: [
          "Attack Speed"
        ]
      },
      {
        en: "Movement Speed",
        "zh-CN": "移动速度",
        aliases: [
          "Movement Speed"
        ]
      },
      {
        en: "Range",
        "zh-CN": "射程",
        aliases: [
          "Range"
        ]
      },
      {
        en: "Energy",
        "zh-CN": "能量",
        aliases: [
          "Energy"
        ]
      },
      {
        en: "Cooldown",
        "zh-CN": "冷却时间",
        aliases: [
          "Cooldown"
        ]
      },
      {
        en: "Biological",
        "zh-CN": "生物单位",
        aliases: [
          "Biological"
        ]
      },
      {
        en: "Mechanical",
        "zh-CN": "机械单位",
        aliases: [
          "Mechanical"
        ]
      },
      {
        en: "Psionic",
        "zh-CN": "灵能单位",
        aliases: [
          "Psionic"
        ]
      },
      {
        en: "Armored",
        "zh-CN": "重甲",
        aliases: [
          "Armored"
        ]
      },
      {
        en: "Light",
        "zh-CN": "轻甲",
        aliases: [
          "Light"
        ]
      },
      {
        en: "Massive",
        "zh-CN": "重型",
        aliases: [
          "Massive"
        ]
      },
      {
        en: "Heroic",
        "zh-CN": "英雄",
        aliases: [
          "Heroic"
        ]
      },
      {
        en: "Structure",
        "zh-CN": "建筑",
        aliases: [
          "Structure"
        ]
      },
      {
        en: "Air",
        "zh-CN": "空中",
        aliases: [
          "Air"
        ]
      },
      {
        en: "Ground",
        "zh-CN": "地面",
        aliases: [
          "Ground"
        ]
      }
    ],
    weekly_mutations: [
      {
        en: "Train of the Dead",
        "zh-CN": "亡者列车",
        aliases: [
          "Train of the Dead"
        ]
      },
      {
        en: "First Strike",
        "zh-CN": "先发制人",
        aliases: [
          "First Strike"
        ]
      },
      {
        en: "Time Lock",
        "zh-CN": "时空枷锁",
        aliases: [
          "Time Lock"
        ]
      },
      {
        en: "Bad Weather",
        "zh-CN": "恶劣天气",
        aliases: [
          "Bad Weather"
        ]
      },
      {
        en: "Whiteout",
        "zh-CN": "雪茫危机",
        aliases: [
          "Whiteout"
        ]
      },
      {
        en: "War Is Hell",
        "zh-CN": "战场炼狱",
        aliases: [
          "War Is Hell"
        ]
      },
      {
        en: "Temple of Pain",
        "zh-CN": "痛苦神庙",
        aliases: [
          "Temple of Pain"
        ]
      },
      {
        en: "Spear of Your Doom",
        "zh-CN": "末日之矛",
        aliases: [
          "Spear of Your Doom"
        ]
      },
      {
        en: "Special Delivery",
        "zh-CN": "特别快递",
        aliases: [
          "Special Delivery"
        ]
      },
      {
        en: "Urban Warfare",
        "zh-CN": "城市巷战",
        aliases: [
          "Urban Warfare"
        ]
      },
      {
        en: "Wheel of Misfortune",
        "zh-CN": "灾难之轮",
        aliases: [
          "Wheel of Misfortune"
        ]
      },
      {
        en: "Perfect Storm",
        "zh-CN": "完美风暴",
        aliases: [
          "Perfect Storm"
        ]
      },
      {
        en: "Boom Town",
        "zh-CN": "全面核战",
        aliases: [
          "Boom Town"
        ]
      },
      {
        en: "Dark Ritual",
        "zh-CN": "黑暗仪式",
        aliases: [
          "Dark Ritual"
        ]
      },
      {
        en: "Out of Order",
        "zh-CN": "完全失控",
        aliases: [
          "Out of Order"
        ]
      },
      {
        en: "Burning Legion",
        "zh-CN": "燃烧军团",
        aliases: [
          "Burning Legion"
        ]
      },
      {
        en: "Triple Threat",
        "zh-CN": "三重威胁",
        aliases: [
          "Triple Threat"
        ]
      },
      {
        en: "World on Fire",
        "zh-CN": "烈焰战场",
        aliases: [
          "World on Fire"
        ]
      },
      {
        en: "Flipping Out",
        "zh-CN": "失心疯",
        aliases: [
          "Flipping Out"
        ]
      },
      {
        en: "Growing Threat",
        "zh-CN": "威胁递增",
        aliases: [
          "Growing Threat"
        ]
      },
      {
        en: "Miner Concerns",
        "zh-CN": "资源危机",
        aliases: [
          "Miner Concerns"
        ]
      },
      {
        en: "Diplomatic Immunity",
        "zh-CN": "外交豁免",
        aliases: [
          "Diplomatic Immunity"
        ]
      },
      {
        en: "Breath of Destruction",
        "zh-CN": "造恶之息",
        aliases: [
          "Breath of Destruction"
        ]
      },
      {
        en: "Fright Night",
        "zh-CN": "惊魂之夜",
        aliases: [
          "Fright Night"
        ]
      },
      {
        en: "Conflagration",
        "zh-CN": "玩火自焚",
        aliases: [
          "Conflagration"
        ]
      },
      {
        en: "Explosive Results",
        "zh-CN": "天轰地爆",
        aliases: [
          "Explosive Results"
        ]
      },
      {
        en: "Fowl Play",
        "zh-CN": "捉鸡行动",
        aliases: [
          "Fowl Play"
        ]
      },
      {
        en: "Power Trip",
        "zh-CN": "能量超负",
        aliases: [
          "Power Trip"
        ]
      },
      {
        en: "Shir Chaos",
        "zh-CN": "拉克希尔大乱斗",
        aliases: [
          "Shir Chaos"
        ]
      },
      {
        en: "Survival of the Fittest",
        "zh-CN": "适者生存",
        aliases: [
          "Survival of the Fittest"
        ]
      },
      {
        en: "Violent Night",
        "zh-CN": "暴力之夜",
        aliases: [
          "Violent Night"
        ]
      },
      {
        en: "Rumble in the Jungle",
        "zh-CN": "丛林激斗",
        aliases: [
          "Rumble in the Jungle"
        ]
      },
      {
        en: "The Ultimate Price",
        "zh-CN": "终极代价",
        aliases: [
          "The Ultimate Price"
        ]
      },
      {
        en: "Cremation",
        "zh-CN": "火葬仪式",
        aliases: [
          "Cremation"
        ]
      },
      {
        en: "Shields Up!",
        "zh-CN": "高举盾牌！",
        aliases: [
          "Shields Up!"
        ]
      },
      {
        en: "Ulnar New Year",
        "zh-CN": "乌历新年",
        aliases: [
          "Ulnar New Year"
        ]
      },
      {
        en: "Sick Micro",
        "zh-CN": "死疫横生",
        aliases: [
          "Sick Micro"
        ]
      },
      {
        en: "Blast from the Past",
        "zh-CN": "旧忆重惊",
        aliases: [
          "Blast from the Past"
        ]
      },
      {
        en: "Portal Power",
        "zh-CN": "星门异动",
        aliases: [
          "Portal Power"
        ]
      },
      {
        en: "Hostile Takeover",
        "zh-CN": "强行霸占",
        aliases: [
          "Hostile Takeover"
        ]
      },
      {
        en: "Grave Danger",
        "zh-CN": "死亡危机",
        aliases: [
          "Grave Danger"
        ]
      },
      {
        en: "The Injustice League",
        "zh-CN": "黑暗时刻",
        aliases: [
          "The Injustice League"
        ]
      },
      {
        en: "No Money, More Problems",
        "zh-CN": "没钱麻烦大了",
        aliases: [
          "No Money, More Problems"
        ]
      },
      {
        en: "Field of Screams",
        "zh-CN": "雷鸣弹啸",
        aliases: [
          "Field of Screams"
        ]
      },
      {
        en: "The Quick and the Dead",
        "zh-CN": "疫鬼狂潮",
        aliases: [
          "The Quick and the Dead"
        ]
      },
      {
        en: "Out of Sight",
        "zh-CN": "隐形威胁",
        aliases: [
          "Out of Sight"
        ]
      },
      {
        en: "Frostbite",
        "zh-CN": "噬骨之寒",
        aliases: [
          "Frostbite"
        ]
      },
      {
        en: "Certain Demise",
        "zh-CN": "无间死局",
        aliases: [
          "Certain Demise"
        ]
      },
      {
        en: "Delivery Guaranteed",
        "zh-CN": "火线快递",
        aliases: [
          "Delivery Guaranteed"
        ]
      },
      {
        en: "Dead Heat",
        "zh-CN": "烈火金刚",
        aliases: [
          "Dead Heat"
        ]
      },
      {
        en: "Cold is the Void",
        "zh-CN": "寒冷即是虚空",
        aliases: [
          "Cold is the Void"
        ]
      },
      {
        en: "Futile Resistance",
        "zh-CN": "异形进击",
        aliases: [
          "Futile Resistance"
        ]
      },
      {
        en: "Hard Target",
        "zh-CN": "硬骨头",
        aliases: [
          "Hard Target"
        ]
      },
      {
        en: "Charnel House",
        "zh-CN": "疫区逃生",
        aliases: [
          "Charnel House"
        ]
      },
      {
        en: "Slow and Steady",
        "zh-CN": "步步为营",
        aliases: [
          "Slow and Steady"
        ]
      },
      {
        en: "Instant Karma",
        "zh-CN": "现世现报",
        aliases: [
          "Instant Karma"
        ]
      },
      {
        en: "Worn Out Welcome",
        "zh-CN": "仁至义尽",
        aliases: [
          "Worn Out Welcome"
        ]
      },
      {
        en: "Moths to the Flame",
        "zh-CN": "飞蛾扑火",
        aliases: [
          "Moths to the Flame"
        ]
      },
      {
        en: "Fear and Lava",
        "zh-CN": "火海惊魂",
        aliases: [
          "Fear and Lava"
        ]
      },
      {
        en: "Kill Bot Wars",
        "zh-CN": "机器人大战",
        aliases: [
          "Kill Bot Wars"
        ]
      },
      {
        en: "Magnetic Attraction",
        "zh-CN": "磁性牵引",
        aliases: [
          "Magnetic Attraction"
        ]
      },
      {
        en: "Death from Below",
        "zh-CN": "地发杀机",
        aliases: [
          "Death from Below"
        ]
      },
      {
        en: "Watch the Skies",
        "zh-CN": "天发杀机",
        aliases: [
          "Watch the Skies"
        ]
      },
      {
        en: "Think Fast",
        "zh-CN": "兵贵神速",
        aliases: [
          "Think Fast"
        ]
      },
      {
        en: "What Goes Around",
        "zh-CN": "自作自受",
        aliases: [
          "What Goes Around"
        ]
      },
      {
        en: "Bannable Offense",
        "zh-CN": "封禁行为",
        aliases: [
          "Bannable Offense"
        ]
      },
      {
        en: "Masters of Midnight",
        "zh-CN": "午夜大师",
        aliases: [
          "Masters of Midnight"
        ]
      },
      {
        en: "Night Drive",
        "zh-CN": "雷场夜战",
        aliases: [
          "Night Drive"
        ]
      },
      {
        en: "Get Out More",
        "zh-CN": "极限压迫",
        aliases: [
          "Get Out More"
        ]
      },
      {
        en: "Quick Killers",
        "zh-CN": "杀劫迫临",
        aliases: [
          "Quick Killers"
        ]
      },
      {
        en: "Unstable Environment",
        "zh-CN": "时空气象战",
        aliases: [
          "Unstable Environment"
        ]
      },
      {
        en: "Rest in Peace",
        "zh-CN": "死亡无声",
        aliases: [
          "Rest in Peace"
        ]
      },
      {
        en: "Endless Infection",
        "zh-CN": "无尽感染",
        aliases: [
          "Endless Infection"
        ]
      },
      {
        en: "Battle Hardened",
        "zh-CN": "顽强作战",
        aliases: [
          "Battle Hardened"
        ]
      },
      {
        en: "Chilling Adaptation",
        "zh-CN": "寒冷适应",
        aliases: [
          "Chilling Adaptation"
        ]
      },
      {
        en: "Price of Progress",
        "zh-CN": "进步的代价",
        aliases: [
          "Price of Progress"
        ]
      },
      {
        en: "Negative Reinforcement",
        "zh-CN": "消极增员",
        aliases: [
          "Negative Reinforcement"
        ]
      },
      {
        en: "Retribution",
        "zh-CN": "报应不爽",
        aliases: [
          "Retribution"
        ]
      },
      {
        en: "Rise from the Ashes",
        "zh-CN": "灰烬重生",
        aliases: [
          "Rise from the Ashes"
        ]
      },
      {
        en: "Warp Zone",
        "zh-CN": "扭曲空间",
        aliases: [
          "Warp Zone"
        ]
      },
      {
        en: "Well Trained",
        "zh-CN": "训练有素",
        aliases: [
          "Well Trained"
        ]
      },
      {
        en: "Doomsday Report",
        "zh-CN": "末日报告",
        aliases: [
          "Doomsday Report"
        ]
      },
      {
        en: "Safety Violation",
        "zh-CN": "安全违规",
        aliases: [
          "Safety Violation"
        ]
      },
      {
        en: "Temple of Rebirth",
        "zh-CN": "重生神殿",
        aliases: [
          "Temple of Rebirth"
        ]
      },
      {
        en: "Overclocked",
        "zh-CN": "疯狂超频",
        aliases: [
          "Overclocked"
        ]
      },
      {
        en: "Attrition Warfare",
        "zh-CN": "消耗战",
        aliases: [
          "Attrition Warfare"
        ]
      },
      {
        en: "Together Forever",
        "zh-CN": "永不分离",
        aliases: [
          "Together Forever"
        ]
      },
      {
        en: "Specter of Death",
        "zh-CN": "死亡鬼影",
        aliases: [
          "Specter of Death"
        ]
      },
      {
        en: "Distant Threat",
        "zh-CN": "远距威胁",
        aliases: [
          "Distant Threat"
        ]
      },
      {
        en: "Radiation Zone",
        "zh-CN": "辐射区",
        aliases: [
          "Radiation Zone"
        ]
      },
      {
        en: "Inner Power",
        "zh-CN": "心灵力量",
        aliases: [
          "Inner Power"
        ]
      },
      {
        en: "Moving Fees",
        "zh-CN": "调遣军费",
        aliases: [
          "Moving Fees"
        ]
      },
      {
        en: "Memorable Boss",
        "zh-CN": "梦魇敌酋",
        aliases: [
          "Memorable Boss"
        ]
      },
      {
        en: "Flip My Base",
        "zh-CN": "基地翻转",
        aliases: [
          "Flip My Base"
        ]
      },
      {
        en: "Firewall",
        "zh-CN": "防火墙",
        aliases: [
          "Firewall"
        ]
      },
      {
        en: "Death and Taxes",
        "zh-CN": "死亡税金",
        aliases: [
          "Death and Taxes"
        ]
      },
      {
        en: "Rubber and Glue",
        "zh-CN": "感痛身受",
        aliases: [
          "Rubber and Glue"
        ]
      },
      {
        en: "Hell Train",
        "zh-CN": "地狱列车",
        aliases: [
          "Hell Train"
        ]
      },
      {
        en: "Infection Detected",
        "zh-CN": "感染危机",
        aliases: [
          "Infection Detected"
        ]
      },
      {
        en: "Opportunities Unleashed",
        "zh-CN": "机会尽出",
        aliases: [
          "Opportunities Unleashed"
        ]
      },
      {
        en: "One For All",
        "zh-CN": "一将千军",
        aliases: [
          "One For All"
        ]
      },
      {
        en: "Experimental Artillery",
        "zh-CN": "实验巨炮",
        aliases: [
          "Experimental Artillery"
        ]
      },
      {
        en: "Nuclear Family",
        "zh-CN": "核族入侵",
        aliases: [
          "Nuclear Family"
        ]
      },
      {
        en: "Die Together",
        "zh-CN": "同归于尽",
        aliases: [
          "Die Together"
        ]
      },
      {
        en: "Burning Evacuation",
        "zh-CN": "烈火营救",
        aliases: [
          "Burning Evacuation"
        ]
      },
      {
        en: "Assembly of Vengeance",
        "zh-CN": "复仇者集结",
        aliases: [
          "Assembly of Vengeance"
        ]
      },
      {
        en: "Railroad Switch",
        "zh-CN": "铁轨换线",
        aliases: [
          "Railroad Switch"
        ]
      },
      {
        en: "Hostile Territory",
        "zh-CN": "敌对领地",
        aliases: [
          "Hostile Territory"
        ]
      },
      {
        en: "Media Blackout",
        "zh-CN": "媒体抹黑",
        aliases: [
          "Media Blackout"
        ]
      },
      {
        en: "Thunder Dome",
        "zh-CN": "雷霆穹顶",
        aliases: [
          "Thunder Dome"
        ]
      },
      {
        en: "Dodge This",
        "zh-CN": "躲灾避祸",
        aliases: [
          "Dodge This"
        ]
      },
      {
        en: "Binary Choice",
        "zh-CN": "二元选择",
        aliases: [
          "Binary Choice"
        ]
      },
      {
        en: "The Ascended",
        "zh-CN": "升格蜕变",
        aliases: [
          "The Ascended"
        ]
      },
      {
        en: "Enhanced Defenses",
        "zh-CN": "森严壁垒",
        aliases: [
          "Enhanced Defenses"
        ]
      },
      {
        en: "Double Trouble",
        "zh-CN": "双重麻烦",
        aliases: [
          "Double Trouble"
        ]
      },
      {
        en: "And Drops And Rifts",
        "zh-CN": "星沉地裂",
        aliases: [
          "And Drops And Rifts"
        ]
      },
      {
        en: "Catch the Train",
        "zh-CN": "赶夜车",
        aliases: [
          "Catch the Train"
        ]
      },
      {
        en: "Temple of Terror",
        "zh-CN": "恐惧神庙",
        aliases: [
          "Temple of Terror"
        ]
      },
      {
        en: "Shining Bright",
        "zh-CN": "光炫神迷",
        aliases: [
          "Shining Bright"
        ]
      },
      {
        en: "Endless Sparkles",
        "zh-CN": "无尽花火",
        aliases: [
          "Endless Sparkles"
        ]
      },
      {
        en: "Graveyard Shift",
        "zh-CN": "坟场夜班",
        aliases: [
          "Graveyard Shift"
        ]
      },
      {
        en: "Robotic Revival",
        "zh-CN": "机器重生",
        aliases: [
          "Robotic Revival"
        ]
      },
      {
        en: "Secret Storm",
        "zh-CN": "秘密突击",
        aliases: [
          "Secret Storm"
        ]
      },
      {
        en: "Undermined",
        "zh-CN": "暗地破坏",
        aliases: [
          "Undermined"
        ]
      },
      {
        en: "Astigmatism",
        "zh-CN": "散光",
        aliases: [
          "Astigmatism"
        ]
      },
      {
        en: "Never Say Die",
        "zh-CN": "永不言死",
        aliases: [
          "Never Say Die"
        ]
      },
      {
        en: "Medieval Times",
        "zh-CN": "中世纪",
        aliases: [
          "Medieval Times"
        ]
      },
      {
        en: "Onslaught",
        "zh-CN": "全力猛攻",
        aliases: [
          "Onslaught"
        ]
      },
      {
        en: "Equivalent Exchange",
        "zh-CN": "等价交换",
        aliases: [
          "Equivalent Exchange"
        ]
      },
      {
        en: "Encroaching Madness",
        "zh-CN": "迫近的疯狂",
        aliases: [
          "Encroaching Madness"
        ]
      },
      {
        en: "Season of Giving",
        "zh-CN": "感恩季",
        aliases: [
          "Season of Giving"
        ]
      },
      {
        en: "Choices Choices",
        "zh-CN": "决择抉择",
        aliases: [
          "Choices Choices"
        ]
      },
      {
        en: "Inordinate Response",
        "zh-CN": "过度反应",
        aliases: [
          "Inordinate Response"
        ]
      },
      {
        en: "By Fire Be Purged",
        "zh-CN": "火焰净化",
        aliases: [
          "By Fire Be Purged"
        ]
      },
      {
        en: "Timely Reinforcements",
        "zh-CN": "极速增援",
        aliases: [
          "Timely Reinforcements"
        ]
      },
      {
        en: "Blind Tribute",
        "zh-CN": "盲目进贡",
        aliases: [
          "Blind Tribute"
        ]
      },
      {
        en: "Barrier to Entry",
        "zh-CN": "进击壁垒",
        aliases: [
          "Barrier to Entry"
        ]
      },
      {
        en: "Like Swatting Insects",
        "zh-CN": "虫人海啸",
        aliases: [
          "Like Swatting Insects"
        ]
      },
      {
        en: "Getting Along",
        "zh-CN": "心有灵犀",
        aliases: [
          "Getting Along"
        ]
      },
      {
        en: "Knock Knock",
        "zh-CN": "夜半敲门",
        aliases: [
          "Knock Knock"
        ]
      },
      {
        en: "Dance Dance Evolution",
        "zh-CN": "舞舞生疯",
        aliases: [
          "Dance Dance Evolution"
        ]
      },
      {
        en: "Train of Pain",
        "zh-CN": "痛苦列车",
        aliases: [
          "Train of Pain"
        ]
      },
      {
        en: "Resilient Rifts",
        "zh-CN": "刚硬裂隙",
        aliases: [
          "Resilient Rifts"
        ]
      },
      {
        en: "Chain Explosion",
        "zh-CN": "爆炸之链",
        aliases: [
          "Chain Explosion"
        ]
      },
      {
        en: "Call It a Comeback",
        "zh-CN": "噩梦重临",
        aliases: [
          "Call It a Comeback"
        ]
      },
      {
        en: "Explosive Hunt",
        "zh-CN": "排爆行动",
        aliases: [
          "Explosive Hunt"
        ]
      },
      {
        en: "Tax Day",
        "zh-CN": "缴税日",
        aliases: [
          "Tax Day"
        ]
      },
      {
        en: "Aggressive Recruitment",
        "zh-CN": "侵袭强征",
        aliases: [
          "Aggressive Recruitment"
        ]
      },
      {
        en: "Scary Scavengers",
        "zh-CN": "坟场拾荒",
        aliases: [
          "Scary Scavengers"
        ]
      },
      {
        en: "Call of the Void",
        "zh-CN": "虚空召唤",
        aliases: [
          "Call of the Void"
        ]
      },
      {
        en: "In the Name of Love",
        "zh-CN": "因爱之名",
        aliases: [
          "In the Name of Love"
        ]
      },
      {
        en: "Locked and Loaded",
        "zh-CN": "锁定击发",
        aliases: [
          "Locked and Loaded"
        ]
      },
      {
        en: "Of Mines and Miners",
        "zh-CN": "雷劫难逃",
        aliases: [
          "Of Mines and Miners"
        ]
      },
      {
        en: "The League of Vermillians",
        "zh-CN": "恶棍联盟",
        aliases: [
          "The League of Vermillians"
        ]
      },
      {
        en: "Operation Cooperation",
        "zh-CN": "合作无间",
        aliases: [
          "Operation Cooperation"
        ]
      },
      {
        en: "Hot n Cold",
        "zh-CN": "冰火之歌",
        aliases: [
          "Hot n Cold"
        ]
      },
      {
        en: "What We Do in the Shadows",
        "zh-CN": "吸血鬼生活",
        aliases: [
          "What We Do in the Shadows"
        ]
      },
      {
        en: "Hardware Malfunction",
        "zh-CN": "硬件故障",
        aliases: [
          "Hardware Malfunction"
        ]
      },
      {
        en: "Shared Pain",
        "zh-CN": "分担痛苦",
        aliases: [
          "Shared Pain"
        ]
      },
      {
        en: "The Longest Night",
        "zh-CN": "漫漫长夜",
        aliases: [
          "The Longest Night"
        ]
      },
      {
        en: "The Quick and the Undead",
        "zh-CN": "迅捷亡尸",
        aliases: [
          "The Quick and the Undead"
        ]
      },
      {
        en: "Decade of Decadence",
        "zh-CN": "征战十年",
        aliases: [
          "Decade of Decadence"
        ]
      },
      {
        en: "Bubble Pop",
        "zh-CN": "泡泡世界",
        aliases: [
          "Bubble Pop"
        ]
      },
      {
        en: "Coordinated Defense",
        "zh-CN": "协同防御",
        aliases: [
          "Coordinated Defense"
        ]
      },
      {
        en: "Beggars Can't Be Choosers",
        "zh-CN": "饥不择食",
        aliases: [
          "Beggars Can't Be Choosers"
        ]
      },
      {
        en: "My Bots",
        "zh-CN": "我的机器人！",
        aliases: [
          "My Bots"
        ]
      },
      {
        en: "Multitasking Trainer",
        "zh-CN": "多线操作训练",
        aliases: [
          "Multitasking Trainer"
        ]
      },
      {
        en: "Hello My Old Friend",
        "zh-CN": "老友重聚",
        aliases: [
          "Hello My Old Friend"
        ]
      },
      {
        en: "Of One Mind",
        "zh-CN": "万众一心",
        aliases: [
          "Of One Mind"
        ]
      },
      {
        en: "Blasting Off Again",
        "zh-CN": "发射升空",
        aliases: [
          "Blasting Off Again"
        ]
      },
      {
        en: "Enter the Nexus",
        "zh-CN": "进入时空枢纽",
        aliases: [
          "Enter the Nexus"
        ]
      },
      {
        en: "Death is Fleeting",
        "zh-CN": "死亡转瞬即逝",
        aliases: [
          "Death is Fleeting"
        ]
      },
      {
        en: "Mass Manufacturing",
        "zh-CN": "批量生产",
        aliases: [
          "Mass Manufacturing"
        ]
      },
      {
        en: "Fire in the Hole",
        "zh-CN": "小心手雷",
        aliases: [
          "Fire in the Hole"
        ]
      },
      {
        en: "Sudden but Inevitable",
        "zh-CN": "突然却不可避免",
        aliases: [
          "Sudden but Inevitable"
        ]
      }
    ],
    units: [
      { en: "Sentry", "zh-CN": "机械哨兵", aliases: ["Sentry"] },
      { en: "Marine", "zh-CN": "陆战队员", aliases: ["Marine"] },
      { en: "Marauder", "zh-CN": "劫掠者", aliases: ["Marauder"] },
      { en: "Siege Tank", "zh-CN": "攻城坦克", aliases: ["Siege Tank"] },
      { en: "Medivac", "zh-CN": "医疗运输机", aliases: ["Medivac"] },
      { en: "Viking", "zh-CN": "维京战机", aliases: ["Viking"] },
      { en: "Zealot", "zh-CN": "狂热者", aliases: ["Zealot"] },
      { en: "Adept", "zh-CN": "使徒", aliases: ["Adept"] },
      { en: "Stalker", "zh-CN": "追猎者", aliases: ["Stalker"] },
      { en: "Immortal", "zh-CN": "不朽者", aliases: ["Immortal"] },
      { en: "Colossus", "zh-CN": "巨像", aliases: ["Colossus"] },
      { en: "Warp Prism", "zh-CN": "折跃棱镜", aliases: ["Warp Prism", "War Prism"] },
      { en: "Void Ray", "zh-CN": "虚空辉光舰", aliases: ["Void Ray"] },
      { en: "Carrier", "zh-CN": "航母", aliases: ["Carrier", "航空母舰"] },
      { en: "Oracle", "zh-CN": "先知", aliases: ["Oracle"] },
      { en: "Roach", "zh-CN": "蟑螂", aliases: ["Roach"] },
      { en: "Zergling", "zh-CN": "跳虫", aliases: ["Zergling"] },
      { en: "Hydralisk", "zh-CN": "刺蛇", aliases: ["Hydralisk"] },
      { en: "Mutalisk", "zh-CN": "异龙", aliases: ["Mutalisk"] },
      { en: "Infestor", "zh-CN": "感染者", aliases: ["Infestor"] },
      { en: "Swarm Host", "zh-CN": "虫群宿主", aliases: ["Swarm Host"] }
    ],
    buildings: [
      { en: "Command Center", "zh-CN": "指挥中心", aliases: ["Command Center"] },
      { en: "Barracks", "zh-CN": "兵营", aliases: ["Barracks"] },
      { en: "Factory", "zh-CN": "军工厂", aliases: ["Factory"] },
      { en: "Starport", "zh-CN": "星港", aliases: ["Starport"] },
      { en: "Nexus", "zh-CN": "星灵枢纽", aliases: ["Nexus"] },
      { en: "Gateway", "zh-CN": "传送门", aliases: ["Gateway"] },
      { en: "Warp Gate", "zh-CN": "折跃门", aliases: ["Warp Gate"] },
      { en: "Pylon", "zh-CN": "水晶塔", aliases: ["Pylon"] },
      { en: "Assimilator", "zh-CN": "吸纳舱", aliases: ["Assimilator"] },
      { en: "Extractor", "zh-CN": "萃取巢", aliases: ["Extractor"] },
      { en: "Missile Turret", "zh-CN": "导弹塔", aliases: ["Missile Turret"] },
      { en: "Spine Crawler", "zh-CN": "脊针爬虫", aliases: ["Spine Crawler"] },
      { en: "Spore Crawler", "zh-CN": "孢子爬虫", aliases: ["Spore Crawler"] },
      { en: "Shield Battery", "zh-CN": "护盾充能器", aliases: ["Shield Battery"] }
    ],
    terminology: [
      { en: "Mastery Set", "zh-CN": "技能组", aliases: ["Mastery Set", "Power Set"] },
      { en: "Solar Lance", "zh-CN": "太阳能长枪", aliases: ["Solar Lance"] }
    ]
  };

  // html/scripts/tooltip-path.ts
  function mutatorSlugFromPath(pathname) {
    const match = pathname.match(/(?:^|\/)mutators\/([a-z0-9]+)\/?$/);
    return match?.[1] ?? null;
  }

  // html/scripts/tooltips.ts
  function token(name) {
    if (name === "Dom. Trooper")
      return "dominiontrooper";
    if (name === "Dom. Assault Trooper")
      return "dominionassaulttrooper";
    if (name === "Dom. Flame Trooper")
      return "dominionflametrooper";
    if (name === "Dom. Rocket Trooper")
      return "dominionrockettrooper";
    if (name === "Tychus Findlay")
      return "tychus";
    if (name === "James Sirius Sykes")
      return "sirius";
    if (name === "Miles Blaze Lewis")
      return "blaze";
    if (name === "Rob Cannonball Boswell")
      return "cannonball";
    if (name === "Lt Layna Nikara")
      return "nikara";
    if (name === "Kev Rattlesnake West")
      return "rattlesnake";
    return name.toLowerCase().replace(/[^a-z0-9]+/g, "");
  }
  var mutatorEnglishNames = new Map(glossary_default.mutators.map((entry) => [entry["zh-CN"], entry.en]));
  var mutatorData = new Map(mutators_default.map((mutator) => [token(mutatorEnglishNames.get(mutator.mutatorname) || mutator.mutatorname), mutator]));
  var upgradeData = new Map(playerupgrades_default.map((upgrade) => [`upgrades/${token(upgrade.commander)}/${upgrade.icon}`, upgrade]));
  var activeTooltipTarget = null;
  function tooltipElement() {
    let tooltip = document.getElementById("tooltip");
    if (!tooltip) {
      tooltip = document.createElement("div");
      tooltip.id = "tooltip";
      document.body.append(tooltip);
    }
    return tooltip;
  }
  function mutatorSlug(link) {
    const url = new URL(link.href, window.location.href);
    if (url.origin !== window.location.origin)
      return null;
    return mutatorSlugFromPath(url.pathname);
  }
  function setTooltipPosition(target) {
    const tooltip = tooltipElement();
    const rect = target.getBoundingClientRect();
    const gap = 8;
    const viewportWidth = document.documentElement.clientWidth;
    const tooltipWidth = tooltip.getBoundingClientRect().width;
    if (viewportWidth - tooltipWidth - gap < rect.left) {
      tooltip.style.left = "auto";
      tooltip.style.right = `${gap}px`;
    } else {
      tooltip.style.left = `${rect.left}px`;
      tooltip.style.right = "auto";
    }
    if (rect.top < 200) {
      tooltip.style.top = `${rect.bottom + gap}px`;
      tooltip.style.bottom = "auto";
    } else {
      tooltip.style.top = "auto";
      tooltip.style.bottom = `${window.innerHeight - rect.top + gap}px`;
    }
    tooltip.style.visibility = "visible";
  }
  function prepareTooltip() {
    const tooltip = tooltipElement();
    tooltip.style.display = "block";
    tooltip.style.visibility = "hidden";
    tooltip.style.position = "fixed";
    tooltip.style.top = "0";
    tooltip.style.left = "0";
    tooltip.style.bottom = "auto";
    tooltip.style.right = "auto";
    tooltip.style.width = "max-content";
    tooltip.style.boxSizing = "border-box";
    tooltip.style.maxWidth = `${Math.min(400, document.documentElement.clientWidth)}px`;
    return tooltip;
  }
  function showMutatorTooltip(link) {
    const slug = mutatorSlug(link);
    if (!slug)
      return;
    const mutator = mutatorData.get(slug);
    if (!mutator)
      return;
    const tooltip = prepareTooltip();
    const name = document.createElement("b");
    name.textContent = mutator.mutatorname;
    tooltip.replaceChildren(name, document.createElement("br"), mutator.mutatordescription);
    activeTooltipTarget = link;
    setTooltipPosition(link);
  }
  function showUpgradeTooltip(target) {
    const key = target.dataset.tooltip;
    if (!key)
      return;
    const upgrade = upgradeData.get(key);
    if (!upgrade)
      return;
    const tooltip = prepareTooltip();
    const icon = document.createElement("img");
    const dir = token(upgrade.commander) !== "tychus" && token(upgrade.unit) === token(upgrade.commander) ? "hero" : "unitupgrades";
    icon.src = `/images/commanderdata/${dir}/${token(upgrade.commander)}/${upgrade.icon}.png`;
    icon.alt = "";
    icon.width = 50;
    icon.height = 50;
    icon.style.float = "left";
    const text = document.createElement("div");
    text.style.marginLeft = "55px";
    const name = document.createElement("b");
    name.textContent = upgrade.name;
    text.replaceChildren(name, document.createElement("br"), upgrade.effect);
    tooltip.replaceChildren(icon, text);
    activeTooltipTarget = target;
    setTooltipPosition(target);
  }
  function hideTooltip() {
    activeTooltipTarget = null;
    tooltipElement().style.display = "none";
  }
  function closestTooltipTarget(target) {
    if (!(target instanceof Element))
      return null;
    return target.closest("[data-tooltip], a[href]:not([data-no-tooltip])");
  }
  function showTooltip(target) {
    if (target.dataset.tooltip) {
      showUpgradeTooltip(target);
    } else if (target instanceof HTMLAnchorElement) {
      showMutatorTooltip(target);
    }
  }
  document.addEventListener("mouseover", (event) => {
    const target = closestTooltipTarget(event.target);
    if (target)
      showTooltip(target);
  });
  document.addEventListener("mouseout", (event) => {
    if (!activeTooltipTarget)
      return;
    if (event.relatedTarget && activeTooltipTarget.contains(event.relatedTarget))
      return;
    hideTooltip();
  });
  document.addEventListener("focusin", (event) => {
    const target = closestTooltipTarget(event.target);
    if (target)
      showTooltip(target);
  });
  document.addEventListener("focusout", (event) => {
    if (!activeTooltipTarget)
      return;
    if (event.relatedTarget && activeTooltipTarget.contains(event.relatedTarget))
      return;
    hideTooltip();
  });
})();

//# debugId=1124CDE2055B73D264756E2164756E21
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidG9vbHRpcC1wYXRoLnRzIiwgInRvb2x0aXBzLnRzIl0sCiAgInNvdXJjZXNDb250ZW50IjogWwogICAgImV4cG9ydCBmdW5jdGlvbiBtdXRhdG9yU2x1Z0Zyb21QYXRoKHBhdGhuYW1lOiBzdHJpbmcpOiBzdHJpbmcgfCBudWxsIHtcbiAgICBjb25zdCBtYXRjaCA9IHBhdGhuYW1lLm1hdGNoKC8oPzpefFxcLyltdXRhdG9yc1xcLyhbYS16MC05XSspXFwvPyQvKTtcbiAgICByZXR1cm4gbWF0Y2g/LlsxXSA/PyBudWxsO1xufVxuIiwKICAgICJpbXBvcnQgbXV0YXRvcnMgZnJvbSBcIi4uLy4uL3NvdXJjZS1kYXRhL211dGF0b3JzLmpzb25cIjtcbmltcG9ydCBwbGF5ZXJVcGdyYWRlcyBmcm9tIFwiLi4vLi4vc291cmNlLWRhdGEvcGxheWVydXBncmFkZXMuanNvblwiO1xuaW1wb3J0IGdsb3NzYXJ5IGZyb20gXCIuLi8uLi90cmFuc2xhdGlvbi9nbG9zc2FyeS5qc29uXCI7XG5pbXBvcnQgeyBtdXRhdG9yU2x1Z0Zyb21QYXRoIH0gZnJvbSAnLi90b29sdGlwLXBhdGgnO1xuXG5mdW5jdGlvbiB0b2tlbihuYW1lOiBzdHJpbmcpOiBzdHJpbmcge1xuICAgIGlmIChuYW1lID09PSBcIkRvbS4gVHJvb3BlclwiKSByZXR1cm4gJ2RvbWluaW9udHJvb3Blcic7XG4gICAgaWYgKG5hbWUgPT09IFwiRG9tLiBBc3NhdWx0IFRyb29wZXJcIikgcmV0dXJuICdkb21pbmlvbmFzc2F1bHR0cm9vcGVyJztcbiAgICBpZiAobmFtZSA9PT0gXCJEb20uIEZsYW1lIFRyb29wZXJcIikgcmV0dXJuICdkb21pbmlvbmZsYW1ldHJvb3Blcic7XG4gICAgaWYgKG5hbWUgPT09IFwiRG9tLiBSb2NrZXQgVHJvb3BlclwiKSByZXR1cm4gJ2RvbWluaW9ucm9ja2V0dHJvb3Blcic7XG4gICAgaWYgKG5hbWUgPT09IFwiVHljaHVzIEZpbmRsYXlcIikgcmV0dXJuICd0eWNodXMnO1xuICAgIGlmIChuYW1lID09PSBcIkphbWVzIFNpcml1cyBTeWtlc1wiKSByZXR1cm4gJ3Npcml1cyc7XG4gICAgaWYgKG5hbWUgPT09IFwiTWlsZXMgQmxhemUgTGV3aXNcIikgcmV0dXJuICdibGF6ZSc7XG4gICAgaWYgKG5hbWUgPT09IFwiUm9iIENhbm5vbmJhbGwgQm9zd2VsbFwiKSByZXR1cm4gJ2Nhbm5vbmJhbGwnO1xuICAgIGlmIChuYW1lID09PSBcIkx0IExheW5hIE5pa2FyYVwiKSByZXR1cm4gJ25pa2FyYSc7XG4gICAgaWYgKG5hbWUgPT09IFwiS2V2IFJhdHRsZXNuYWtlIFdlc3RcIikgcmV0dXJuICdyYXR0bGVzbmFrZSc7XG5cbiAgICByZXR1cm4gbmFtZS50b0xvd2VyQ2FzZSgpLnJlcGxhY2UoL1teYS16MC05XSsvZywgXCJcIik7XG59XG5cbmNvbnN0IG11dGF0b3JFbmdsaXNoTmFtZXMgPSBuZXcgTWFwKGdsb3NzYXJ5Lm11dGF0b3JzLm1hcChlbnRyeSA9PiBbZW50cnlbXCJ6aC1DTlwiXSwgZW50cnkuZW5dKSk7XG5jb25zdCBtdXRhdG9yRGF0YSA9IG5ldyBNYXAobXV0YXRvcnMubWFwKG11dGF0b3IgPT4gW3Rva2VuKG11dGF0b3JFbmdsaXNoTmFtZXMuZ2V0KG11dGF0b3IubXV0YXRvcm5hbWUpIHx8IG11dGF0b3IubXV0YXRvcm5hbWUpLCBtdXRhdG9yXSkpO1xuY29uc3QgdXBncmFkZURhdGEgPSBuZXcgTWFwKHBsYXllclVwZ3JhZGVzLm1hcCh1cGdyYWRlID0+IFtgdXBncmFkZXMvJHt0b2tlbih1cGdyYWRlLmNvbW1hbmRlcil9LyR7dXBncmFkZS5pY29ufWAsIHVwZ3JhZGVdKSk7XG5sZXQgYWN0aXZlVG9vbHRpcFRhcmdldDogSFRNTEVsZW1lbnQgfCBudWxsID0gbnVsbDtcblxuZnVuY3Rpb24gdG9vbHRpcEVsZW1lbnQoKTogSFRNTEVsZW1lbnQge1xuICAgIGxldCB0b29sdGlwID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0b29sdGlwXCIpO1xuICAgIGlmICghdG9vbHRpcCkge1xuICAgICAgICB0b29sdGlwID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImRpdlwiKTtcbiAgICAgICAgdG9vbHRpcC5pZCA9IFwidG9vbHRpcFwiO1xuICAgICAgICBkb2N1bWVudC5ib2R5LmFwcGVuZCh0b29sdGlwKTtcbiAgICB9XG4gICAgcmV0dXJuIHRvb2x0aXA7XG59XG5cbmZ1bmN0aW9uIG11dGF0b3JTbHVnKGxpbms6IEhUTUxBbmNob3JFbGVtZW50KTogc3RyaW5nIHwgbnVsbCB7XG4gICAgY29uc3QgdXJsID0gbmV3IFVSTChsaW5rLmhyZWYsIHdpbmRvdy5sb2NhdGlvbi5ocmVmKTtcbiAgICBpZiAodXJsLm9yaWdpbiAhPT0gd2luZG93LmxvY2F0aW9uLm9yaWdpbikgcmV0dXJuIG51bGw7XG4gICAgcmV0dXJuIG11dGF0b3JTbHVnRnJvbVBhdGgodXJsLnBhdGhuYW1lKTtcbn1cblxuZnVuY3Rpb24gc2V0VG9vbHRpcFBvc2l0aW9uKHRhcmdldDogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICBjb25zdCB0b29sdGlwID0gdG9vbHRpcEVsZW1lbnQoKTtcbiAgICBjb25zdCByZWN0ID0gdGFyZ2V0LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuICAgIGNvbnN0IGdhcCA9IDg7XG4gICAgY29uc3Qgdmlld3BvcnRXaWR0aCA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5jbGllbnRXaWR0aDtcbiAgICBjb25zdCB0b29sdGlwV2lkdGggPSB0b29sdGlwLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLndpZHRoO1xuICAgIGlmICh2aWV3cG9ydFdpZHRoIC0gdG9vbHRpcFdpZHRoIC0gZ2FwIDwgcmVjdC5sZWZ0KSB7XG4gICAgICAgIHRvb2x0aXAuc3R5bGUubGVmdCA9IFwiYXV0b1wiO1xuICAgICAgICB0b29sdGlwLnN0eWxlLnJpZ2h0ID0gYCR7Z2FwfXB4YDtcbiAgICB9IGVsc2Uge1xuICAgICAgICB0b29sdGlwLnN0eWxlLmxlZnQgPSBgJHtyZWN0LmxlZnR9cHhgO1xuICAgICAgICB0b29sdGlwLnN0eWxlLnJpZ2h0ID0gXCJhdXRvXCI7XG4gICAgfVxuXG4gICAgaWYgKHJlY3QudG9wIDwgMjAwKSB7XG4gICAgICAgIHRvb2x0aXAuc3R5bGUudG9wID0gYCR7cmVjdC5ib3R0b20gKyBnYXB9cHhgO1xuICAgICAgICB0b29sdGlwLnN0eWxlLmJvdHRvbSA9IFwiYXV0b1wiO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIHRvb2x0aXAuc3R5bGUudG9wID0gXCJhdXRvXCI7XG4gICAgICAgIHRvb2x0aXAuc3R5bGUuYm90dG9tID0gYCR7d2luZG93LmlubmVySGVpZ2h0IC0gcmVjdC50b3AgKyBnYXB9cHhgO1xuICAgIH1cbiAgICB0b29sdGlwLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcbn1cblxuZnVuY3Rpb24gcHJlcGFyZVRvb2x0aXAoKTogSFRNTEVsZW1lbnQge1xuICAgIGNvbnN0IHRvb2x0aXAgPSB0b29sdGlwRWxlbWVudCgpO1xuICAgIHRvb2x0aXAuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcbiAgICB0b29sdGlwLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xuICAgIHRvb2x0aXAuc3R5bGUucG9zaXRpb24gPSBcImZpeGVkXCI7XG4gICAgdG9vbHRpcC5zdHlsZS50b3AgPSBcIjBcIjtcbiAgICB0b29sdGlwLnN0eWxlLmxlZnQgPSBcIjBcIjtcbiAgICB0b29sdGlwLnN0eWxlLmJvdHRvbSA9IFwiYXV0b1wiO1xuICAgIHRvb2x0aXAuc3R5bGUucmlnaHQgPSBcImF1dG9cIjtcbiAgICB0b29sdGlwLnN0eWxlLndpZHRoID0gXCJtYXgtY29udGVudFwiO1xuICAgIHRvb2x0aXAuc3R5bGUuYm94U2l6aW5nID0gXCJib3JkZXItYm94XCI7XG4gICAgdG9vbHRpcC5zdHlsZS5tYXhXaWR0aCA9IGAke01hdGgubWluKDQwMCwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsaWVudFdpZHRoKX1weGA7XG4gICAgcmV0dXJuIHRvb2x0aXA7XG59XG5cbmZ1bmN0aW9uIHNob3dNdXRhdG9yVG9vbHRpcChsaW5rOiBIVE1MQW5jaG9yRWxlbWVudCk6IHZvaWQge1xuICAgIGNvbnN0IHNsdWcgPSBtdXRhdG9yU2x1ZyhsaW5rKTtcbiAgICBpZiAoIXNsdWcpIHJldHVybjtcbiAgICBjb25zdCBtdXRhdG9yID0gbXV0YXRvckRhdGEuZ2V0KHNsdWcpO1xuICAgIGlmICghbXV0YXRvcikgcmV0dXJuO1xuXG4gICAgY29uc3QgdG9vbHRpcCA9IHByZXBhcmVUb29sdGlwKCk7XG4gICAgY29uc3QgbmFtZSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJiXCIpO1xuICAgIG5hbWUudGV4dENvbnRlbnQgPSBtdXRhdG9yLm11dGF0b3JuYW1lO1xuICAgIHRvb2x0aXAucmVwbGFjZUNoaWxkcmVuKG5hbWUsIGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJiclwiKSwgbXV0YXRvci5tdXRhdG9yZGVzY3JpcHRpb24pO1xuICAgIGFjdGl2ZVRvb2x0aXBUYXJnZXQgPSBsaW5rO1xuICAgIHNldFRvb2x0aXBQb3NpdGlvbihsaW5rKTtcbn1cblxuZnVuY3Rpb24gc2hvd1VwZ3JhZGVUb29sdGlwKHRhcmdldDogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICBjb25zdCBrZXkgPSB0YXJnZXQuZGF0YXNldC50b29sdGlwO1xuICAgIGlmICgha2V5KSByZXR1cm47XG4gICAgY29uc3QgdXBncmFkZSA9IHVwZ3JhZGVEYXRhLmdldChrZXkpO1xuICAgIGlmICghdXBncmFkZSkgcmV0dXJuO1xuXG4gICAgY29uc3QgdG9vbHRpcCA9IHByZXBhcmVUb29sdGlwKCk7XG4gICAgY29uc3QgaWNvbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJpbWdcIik7XG4gICAgY29uc3QgZGlyID0gdG9rZW4odXBncmFkZS5jb21tYW5kZXIpICE9PSAndHljaHVzJyAmJiB0b2tlbih1cGdyYWRlLnVuaXQpID09PSB0b2tlbih1cGdyYWRlLmNvbW1hbmRlcikgPyBcImhlcm9cIiA6IFwidW5pdHVwZ3JhZGVzXCI7XG4gICAgaWNvbi5zcmMgPSBgL2ltYWdlcy9jb21tYW5kZXJkYXRhLyR7ZGlyfS8ke3Rva2VuKHVwZ3JhZGUuY29tbWFuZGVyKX0vJHt1cGdyYWRlLmljb259LnBuZ2A7XG4gICAgaWNvbi5hbHQgPSBcIlwiO1xuICAgIGljb24ud2lkdGggPSA1MDtcbiAgICBpY29uLmhlaWdodCA9IDUwO1xuICAgIGljb24uc3R5bGUuZmxvYXQgPSBcImxlZnRcIjtcbiAgICBjb25zdCB0ZXh0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImRpdlwiKTtcbiAgICB0ZXh0LnN0eWxlLm1hcmdpbkxlZnQgPSBcIjU1cHhcIjtcbiAgICBjb25zdCBuYW1lID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImJcIik7XG4gICAgbmFtZS50ZXh0Q29udGVudCA9IHVwZ3JhZGUubmFtZTtcbiAgICB0ZXh0LnJlcGxhY2VDaGlsZHJlbihuYW1lLCBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiYnJcIiksIHVwZ3JhZGUuZWZmZWN0KTtcbiAgICB0b29sdGlwLnJlcGxhY2VDaGlsZHJlbihpY29uLCB0ZXh0KTtcbiAgICBhY3RpdmVUb29sdGlwVGFyZ2V0ID0gdGFyZ2V0O1xuICAgIHNldFRvb2x0aXBQb3NpdGlvbih0YXJnZXQpO1xufVxuXG5mdW5jdGlvbiBoaWRlVG9vbHRpcCgpOiB2b2lkIHtcbiAgICBhY3RpdmVUb29sdGlwVGFyZ2V0ID0gbnVsbDtcbiAgICB0b29sdGlwRWxlbWVudCgpLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcbn1cblxuZnVuY3Rpb24gY2xvc2VzdFRvb2x0aXBUYXJnZXQodGFyZ2V0OiBFdmVudFRhcmdldCB8IG51bGwpOiBIVE1MRWxlbWVudCB8IG51bGwge1xuICAgIGlmICghKHRhcmdldCBpbnN0YW5jZW9mIEVsZW1lbnQpKSByZXR1cm4gbnVsbDtcbiAgICByZXR1cm4gdGFyZ2V0LmNsb3Nlc3Q8SFRNTEVsZW1lbnQ+KFwiW2RhdGEtdG9vbHRpcF0sIGFbaHJlZl06bm90KFtkYXRhLW5vLXRvb2x0aXBdKVwiKTtcbn1cblxuZnVuY3Rpb24gc2hvd1Rvb2x0aXAodGFyZ2V0OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgIGlmICh0YXJnZXQuZGF0YXNldC50b29sdGlwKSB7XG4gICAgICAgIHNob3dVcGdyYWRlVG9vbHRpcCh0YXJnZXQpO1xuICAgIH0gZWxzZSBpZiAodGFyZ2V0IGluc3RhbmNlb2YgSFRNTEFuY2hvckVsZW1lbnQpIHtcbiAgICAgICAgc2hvd011dGF0b3JUb29sdGlwKHRhcmdldCk7XG4gICAgfVxufVxuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwibW91c2VvdmVyXCIsIGV2ZW50ID0+IHtcbiAgICBjb25zdCB0YXJnZXQgPSBjbG9zZXN0VG9vbHRpcFRhcmdldChldmVudC50YXJnZXQpO1xuICAgIGlmICh0YXJnZXQpIHNob3dUb29sdGlwKHRhcmdldCk7XG59KTtcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIm1vdXNlb3V0XCIsIGV2ZW50ID0+IHtcbiAgICBpZiAoIWFjdGl2ZVRvb2x0aXBUYXJnZXQpIHJldHVybjtcbiAgICBpZiAoZXZlbnQucmVsYXRlZFRhcmdldCAmJiBhY3RpdmVUb29sdGlwVGFyZ2V0LmNvbnRhaW5zKGV2ZW50LnJlbGF0ZWRUYXJnZXQgYXMgTm9kZSkpIHJldHVybjtcbiAgICBoaWRlVG9vbHRpcCgpO1xufSk7XG5cbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJmb2N1c2luXCIsIGV2ZW50ID0+IHtcbiAgICBjb25zdCB0YXJnZXQgPSBjbG9zZXN0VG9vbHRpcFRhcmdldChldmVudC50YXJnZXQpO1xuICAgIGlmICh0YXJnZXQpIHNob3dUb29sdGlwKHRhcmdldCk7XG59KTtcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcImZvY3Vzb3V0XCIsIGV2ZW50ID0+IHtcbiAgICBpZiAoIWFjdGl2ZVRvb2x0aXBUYXJnZXQpIHJldHVybjtcbiAgICBpZiAoZXZlbnQucmVsYXRlZFRhcmdldCAmJiBhY3RpdmVUb29sdGlwVGFyZ2V0LmNvbnRhaW5zKGV2ZW50LnJlbGF0ZWRUYXJnZXQgYXMgTm9kZSkpIHJldHVybjtcbiAgICBoaWRlVG9vbHRpcCgpO1xufSk7XG4iCiAgXSwKICAibWFwcGluZ3MiOiAiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7RUFBTyxTQUFTLG1CQUFtQixDQUFDLFVBQWlDO0FBQUEsSUFDakUsTUFBTSxRQUFRLFNBQVMsTUFBTSxtQ0FBbUM7QUFBQSxJQUNoRSxPQUFPLFFBQVEsTUFBTTtBQUFBOzs7RUNHekIsU0FBUyxLQUFLLENBQUMsTUFBc0I7QUFBQSxJQUNqQyxJQUFJLFNBQVM7QUFBQSxNQUFnQixPQUFPO0FBQUEsSUFDcEMsSUFBSSxTQUFTO0FBQUEsTUFBd0IsT0FBTztBQUFBLElBQzVDLElBQUksU0FBUztBQUFBLE1BQXNCLE9BQU87QUFBQSxJQUMxQyxJQUFJLFNBQVM7QUFBQSxNQUF1QixPQUFPO0FBQUEsSUFDM0MsSUFBSSxTQUFTO0FBQUEsTUFBa0IsT0FBTztBQUFBLElBQ3RDLElBQUksU0FBUztBQUFBLE1BQXNCLE9BQU87QUFBQSxJQUMxQyxJQUFJLFNBQVM7QUFBQSxNQUFxQixPQUFPO0FBQUEsSUFDekMsSUFBSSxTQUFTO0FBQUEsTUFBMEIsT0FBTztBQUFBLElBQzlDLElBQUksU0FBUztBQUFBLE1BQW1CLE9BQU87QUFBQSxJQUN2QyxJQUFJLFNBQVM7QUFBQSxNQUF3QixPQUFPO0FBQUEsSUFFNUMsT0FBTyxLQUFLLFlBQVksRUFBRSxRQUFRLGVBQWUsRUFBRTtBQUFBO0FBQUEsRUFHdkQsSUFBTSxzQkFBc0IsSUFBSSxJQUFJLGlCQUFTLFNBQVMsSUFBSSxXQUFTLENBQUMsTUFBTSxVQUFVLE1BQU0sRUFBRSxDQUFDLENBQUM7QUFBQSxFQUM5RixJQUFNLGNBQWMsSUFBSSxJQUFJLGlCQUFTLElBQUksYUFBVyxDQUFDLE1BQU0sb0JBQW9CLElBQUksUUFBUSxXQUFXLEtBQUssUUFBUSxXQUFXLEdBQUcsT0FBTyxDQUFDLENBQUM7QUFBQSxFQUMxSSxJQUFNLGNBQWMsSUFBSSxJQUFJLHVCQUFlLElBQUksYUFBVyxDQUFDLFlBQVksTUFBTSxRQUFRLFNBQVMsS0FBSyxRQUFRLFFBQVEsT0FBTyxDQUFDLENBQUM7QUFBQSxFQUM1SCxJQUFJLHNCQUEwQztBQUFBLEVBRTlDLFNBQVMsY0FBYyxHQUFnQjtBQUFBLElBQ25DLElBQUksVUFBVSxTQUFTLGVBQWUsU0FBUztBQUFBLElBQy9DLElBQUksQ0FBQyxTQUFTO0FBQUEsTUFDVixVQUFVLFNBQVMsY0FBYyxLQUFLO0FBQUEsTUFDdEMsUUFBUSxLQUFLO0FBQUEsTUFDYixTQUFTLEtBQUssT0FBTyxPQUFPO0FBQUEsSUFDaEM7QUFBQSxJQUNBLE9BQU87QUFBQTtBQUFBLEVBR1gsU0FBUyxXQUFXLENBQUMsTUFBd0M7QUFBQSxJQUN6RCxNQUFNLE1BQU0sSUFBSSxJQUFJLEtBQUssTUFBTSxPQUFPLFNBQVMsSUFBSTtBQUFBLElBQ25ELElBQUksSUFBSSxXQUFXLE9BQU8sU0FBUztBQUFBLE1BQVEsT0FBTztBQUFBLElBQ2xELE9BQU8sb0JBQW9CLElBQUksUUFBUTtBQUFBO0FBQUEsRUFHM0MsU0FBUyxrQkFBa0IsQ0FBQyxRQUEyQjtBQUFBLElBQ25ELE1BQU0sVUFBVSxlQUFlO0FBQUEsSUFDL0IsTUFBTSxPQUFPLE9BQU8sc0JBQXNCO0FBQUEsSUFDMUMsTUFBTSxNQUFNO0FBQUEsSUFDWixNQUFNLGdCQUFnQixTQUFTLGdCQUFnQjtBQUFBLElBQy9DLE1BQU0sZUFBZSxRQUFRLHNCQUFzQixFQUFFO0FBQUEsSUFDckQsSUFBSSxnQkFBZ0IsZUFBZSxNQUFNLEtBQUssTUFBTTtBQUFBLE1BQ2hELFFBQVEsTUFBTSxPQUFPO0FBQUEsTUFDckIsUUFBUSxNQUFNLFFBQVEsR0FBRztBQUFBLElBQzdCLEVBQU87QUFBQSxNQUNILFFBQVEsTUFBTSxPQUFPLEdBQUcsS0FBSztBQUFBLE1BQzdCLFFBQVEsTUFBTSxRQUFRO0FBQUE7QUFBQSxJQUcxQixJQUFJLEtBQUssTUFBTSxLQUFLO0FBQUEsTUFDaEIsUUFBUSxNQUFNLE1BQU0sR0FBRyxLQUFLLFNBQVM7QUFBQSxNQUNyQyxRQUFRLE1BQU0sU0FBUztBQUFBLElBQzNCLEVBQU87QUFBQSxNQUNILFFBQVEsTUFBTSxNQUFNO0FBQUEsTUFDcEIsUUFBUSxNQUFNLFNBQVMsR0FBRyxPQUFPLGNBQWMsS0FBSyxNQUFNO0FBQUE7QUFBQSxJQUU5RCxRQUFRLE1BQU0sYUFBYTtBQUFBO0FBQUEsRUFHL0IsU0FBUyxjQUFjLEdBQWdCO0FBQUEsSUFDbkMsTUFBTSxVQUFVLGVBQWU7QUFBQSxJQUMvQixRQUFRLE1BQU0sVUFBVTtBQUFBLElBQ3hCLFFBQVEsTUFBTSxhQUFhO0FBQUEsSUFDM0IsUUFBUSxNQUFNLFdBQVc7QUFBQSxJQUN6QixRQUFRLE1BQU0sTUFBTTtBQUFBLElBQ3BCLFFBQVEsTUFBTSxPQUFPO0FBQUEsSUFDckIsUUFBUSxNQUFNLFNBQVM7QUFBQSxJQUN2QixRQUFRLE1BQU0sUUFBUTtBQUFBLElBQ3RCLFFBQVEsTUFBTSxRQUFRO0FBQUEsSUFDdEIsUUFBUSxNQUFNLFlBQVk7QUFBQSxJQUMxQixRQUFRLE1BQU0sV0FBVyxHQUFHLEtBQUssSUFBSSxLQUFLLFNBQVMsZ0JBQWdCLFdBQVc7QUFBQSxJQUM5RSxPQUFPO0FBQUE7QUFBQSxFQUdYLFNBQVMsa0JBQWtCLENBQUMsTUFBK0I7QUFBQSxJQUN2RCxNQUFNLE9BQU8sWUFBWSxJQUFJO0FBQUEsSUFDN0IsSUFBSSxDQUFDO0FBQUEsTUFBTTtBQUFBLElBQ1gsTUFBTSxVQUFVLFlBQVksSUFBSSxJQUFJO0FBQUEsSUFDcEMsSUFBSSxDQUFDO0FBQUEsTUFBUztBQUFBLElBRWQsTUFBTSxVQUFVLGVBQWU7QUFBQSxJQUMvQixNQUFNLE9BQU8sU0FBUyxjQUFjLEdBQUc7QUFBQSxJQUN2QyxLQUFLLGNBQWMsUUFBUTtBQUFBLElBQzNCLFFBQVEsZ0JBQWdCLE1BQU0sU0FBUyxjQUFjLElBQUksR0FBRyxRQUFRLGtCQUFrQjtBQUFBLElBQ3RGLHNCQUFzQjtBQUFBLElBQ3RCLG1CQUFtQixJQUFJO0FBQUE7QUFBQSxFQUczQixTQUFTLGtCQUFrQixDQUFDLFFBQTJCO0FBQUEsSUFDbkQsTUFBTSxNQUFNLE9BQU8sUUFBUTtBQUFBLElBQzNCLElBQUksQ0FBQztBQUFBLE1BQUs7QUFBQSxJQUNWLE1BQU0sVUFBVSxZQUFZLElBQUksR0FBRztBQUFBLElBQ25DLElBQUksQ0FBQztBQUFBLE1BQVM7QUFBQSxJQUVkLE1BQU0sVUFBVSxlQUFlO0FBQUEsSUFDL0IsTUFBTSxPQUFPLFNBQVMsY0FBYyxLQUFLO0FBQUEsSUFDekMsTUFBTSxNQUFNLE1BQU0sUUFBUSxTQUFTLE1BQU0sWUFBWSxNQUFNLFFBQVEsSUFBSSxNQUFNLE1BQU0sUUFBUSxTQUFTLElBQUksU0FBUztBQUFBLElBQ2pILEtBQUssTUFBTSx5QkFBeUIsT0FBTyxNQUFNLFFBQVEsU0FBUyxLQUFLLFFBQVE7QUFBQSxJQUMvRSxLQUFLLE1BQU07QUFBQSxJQUNYLEtBQUssUUFBUTtBQUFBLElBQ2IsS0FBSyxTQUFTO0FBQUEsSUFDZCxLQUFLLE1BQU0sUUFBUTtBQUFBLElBQ25CLE1BQU0sT0FBTyxTQUFTLGNBQWMsS0FBSztBQUFBLElBQ3pDLEtBQUssTUFBTSxhQUFhO0FBQUEsSUFDeEIsTUFBTSxPQUFPLFNBQVMsY0FBYyxHQUFHO0FBQUEsSUFDdkMsS0FBSyxjQUFjLFFBQVE7QUFBQSxJQUMzQixLQUFLLGdCQUFnQixNQUFNLFNBQVMsY0FBYyxJQUFJLEdBQUcsUUFBUSxNQUFNO0FBQUEsSUFDdkUsUUFBUSxnQkFBZ0IsTUFBTSxJQUFJO0FBQUEsSUFDbEMsc0JBQXNCO0FBQUEsSUFDdEIsbUJBQW1CLE1BQU07QUFBQTtBQUFBLEVBRzdCLFNBQVMsV0FBVyxHQUFTO0FBQUEsSUFDekIsc0JBQXNCO0FBQUEsSUFDdEIsZUFBZSxFQUFFLE1BQU0sVUFBVTtBQUFBO0FBQUEsRUFHckMsU0FBUyxvQkFBb0IsQ0FBQyxRQUFnRDtBQUFBLElBQzFFLElBQUksRUFBRSxrQkFBa0I7QUFBQSxNQUFVLE9BQU87QUFBQSxJQUN6QyxPQUFPLE9BQU8sUUFBcUIsZ0RBQWdEO0FBQUE7QUFBQSxFQUd2RixTQUFTLFdBQVcsQ0FBQyxRQUEyQjtBQUFBLElBQzVDLElBQUksT0FBTyxRQUFRLFNBQVM7QUFBQSxNQUN4QixtQkFBbUIsTUFBTTtBQUFBLElBQzdCLEVBQU8sU0FBSSxrQkFBa0IsbUJBQW1CO0FBQUEsTUFDNUMsbUJBQW1CLE1BQU07QUFBQSxJQUM3QjtBQUFBO0FBQUEsRUFHSixTQUFTLGlCQUFpQixhQUFhLFdBQVM7QUFBQSxJQUM1QyxNQUFNLFNBQVMscUJBQXFCLE1BQU0sTUFBTTtBQUFBLElBQ2hELElBQUk7QUFBQSxNQUFRLFlBQVksTUFBTTtBQUFBLEdBQ2pDO0FBQUEsRUFFRCxTQUFTLGlCQUFpQixZQUFZLFdBQVM7QUFBQSxJQUMzQyxJQUFJLENBQUM7QUFBQSxNQUFxQjtBQUFBLElBQzFCLElBQUksTUFBTSxpQkFBaUIsb0JBQW9CLFNBQVMsTUFBTSxhQUFxQjtBQUFBLE1BQUc7QUFBQSxJQUN0RixZQUFZO0FBQUEsR0FDZjtBQUFBLEVBRUQsU0FBUyxpQkFBaUIsV0FBVyxXQUFTO0FBQUEsSUFDMUMsTUFBTSxTQUFTLHFCQUFxQixNQUFNLE1BQU07QUFBQSxJQUNoRCxJQUFJO0FBQUEsTUFBUSxZQUFZLE1BQU07QUFBQSxHQUNqQztBQUFBLEVBRUQsU0FBUyxpQkFBaUIsWUFBWSxXQUFTO0FBQUEsSUFDM0MsSUFBSSxDQUFDO0FBQUEsTUFBcUI7QUFBQSxJQUMxQixJQUFJLE1BQU0saUJBQWlCLG9CQUFvQixTQUFTLE1BQU0sYUFBcUI7QUFBQSxNQUFHO0FBQUEsSUFDdEYsWUFBWTtBQUFBLEdBQ2Y7IiwKICAiZGVidWdJZCI6ICIxMTI0Q0RFMjA1NUI3M0QyNjQ3NTZFMjE2NDc1NkUyMSIsCiAgIm5hbWVzIjogW10KfQ==
