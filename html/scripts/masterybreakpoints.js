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

  // html/scripts/masterybreakpoints-core.ts
  var RACES = ["Protoss", "Terran", "Zerg", "Infested", "Mutator"];
  function calculateDamage(ability, points) {
    const rawDamage = ability.baseDamage + ability.damageIncrease * points * ability.baseDamage;
    return points === 15 || points === 30 ? Math.round(rawDamage) : Math.floor(rawDamage);
  }
  function classifyUnits(units, ability, points, armor) {
    const buckets = Object.fromEntries(RACES.map((race) => [race, Array.from({ length: ability.spammable ? 4 : 2 }, () => [])]));
    let damage = calculateDamage(ability, points);
    if (ability.affectedByArmor)
      damage -= armor;
    for (const unit of units) {
      if (!ability.air && unit.flyer)
        continue;
      if (!ability.structure && unit.structure)
        continue;
      const hits = Math.max(1, Math.ceil((unit.hp + unit.shields) / damage));
      const bucket = ability.spammable ? Math.min(hits, 4) - 1 : hits <= 1 ? 0 : 1;
      buckets[unit.race] ??= Array.from({ length: ability.spammable ? 4 : 2 }, () => []);
      buckets[unit.race][bucket].push(unit);
    }
    return buckets;
  }

  // html/scripts/masterybreakpoints.ts
  window.masteryBreakpoints = { calculateDamage, classifyUnits };
})();

//# debugId=61178A92AB6AEA8C64756E2164756E21
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsibWFzdGVyeWJyZWFrcG9pbnRzLWNvcmUudHMiLCAibWFzdGVyeWJyZWFrcG9pbnRzLnRzIl0sCiAgInNvdXJjZXNDb250ZW50IjogWwogICAgImV4cG9ydCB0eXBlIEJyZWFrcG9pbnRBYmlsaXR5ID0ge1xuICAgIHNwYW1tYWJsZTogYm9vbGVhbjtcbiAgICBhZmZlY3RlZEJ5QXJtb3I6IGJvb2xlYW47XG4gICAgYmFzZURhbWFnZTogbnVtYmVyO1xuICAgIGRhbWFnZUluY3JlYXNlOiBudW1iZXI7XG4gICAgYWlyOiBib29sZWFuO1xuICAgIHN0cnVjdHVyZTogYm9vbGVhbjtcbn07XG5cbmV4cG9ydCB0eXBlIEJyZWFrcG9pbnRVbml0ID0ge1xuICAgIG5hbWU6IHN0cmluZztcbiAgICByYWNlOiBzdHJpbmc7XG4gICAgaHA6IG51bWJlcjtcbiAgICBzaGllbGRzOiBudW1iZXI7XG4gICAgYXJtb3I6IG51bWJlcjtcbiAgICBsaWdodDogbnVtYmVyO1xuICAgIHN0cnVjdHVyZTogbnVtYmVyO1xuICAgIGZseWVyOiBudW1iZXI7XG4gICAgdG9rZW46IHN0cmluZztcbn07XG5cbmV4cG9ydCB0eXBlIEJyZWFrcG9pbnRCdWNrZXRzID0gUmVjb3JkPHN0cmluZywgQnJlYWtwb2ludFVuaXRbXVtdPjtcblxuY29uc3QgUkFDRVMgPSBbXCJQcm90b3NzXCIsIFwiVGVycmFuXCIsIFwiWmVyZ1wiLCBcIkluZmVzdGVkXCIsIFwiTXV0YXRvclwiXTtcblxuZXhwb3J0IGZ1bmN0aW9uIGNhbGN1bGF0ZURhbWFnZShhYmlsaXR5OiBCcmVha3BvaW50QWJpbGl0eSwgcG9pbnRzOiBudW1iZXIpOiBudW1iZXIge1xuICAgIGNvbnN0IHJhd0RhbWFnZSA9IGFiaWxpdHkuYmFzZURhbWFnZSArIGFiaWxpdHkuZGFtYWdlSW5jcmVhc2UgKiBwb2ludHMgKiBhYmlsaXR5LmJhc2VEYW1hZ2U7XG4gICAgcmV0dXJuIHBvaW50cyA9PT0gMTUgfHwgcG9pbnRzID09PSAzMCA/IE1hdGgucm91bmQocmF3RGFtYWdlKSA6IE1hdGguZmxvb3IocmF3RGFtYWdlKTtcbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGNsYXNzaWZ5VW5pdHMoXG4gICAgdW5pdHM6IEJyZWFrcG9pbnRVbml0W10sXG4gICAgYWJpbGl0eTogQnJlYWtwb2ludEFiaWxpdHksXG4gICAgcG9pbnRzOiBudW1iZXIsXG4gICAgYXJtb3I6IG51bWJlcixcbik6IEJyZWFrcG9pbnRCdWNrZXRzIHtcbiAgICBjb25zdCBidWNrZXRzOiBCcmVha3BvaW50QnVja2V0cyA9IE9iamVjdC5mcm9tRW50cmllcyhcbiAgICAgICAgUkFDRVMubWFwKHJhY2UgPT4gW3JhY2UsIEFycmF5LmZyb20oeyBsZW5ndGg6IGFiaWxpdHkuc3BhbW1hYmxlID8gNCA6IDIgfSwgKCkgPT4gW10pXSksXG4gICAgKTtcbiAgICBsZXQgZGFtYWdlID0gY2FsY3VsYXRlRGFtYWdlKGFiaWxpdHksIHBvaW50cyk7XG4gICAgaWYgKGFiaWxpdHkuYWZmZWN0ZWRCeUFybW9yKSBkYW1hZ2UgLT0gYXJtb3I7XG5cbiAgICBmb3IgKGNvbnN0IHVuaXQgb2YgdW5pdHMpIHtcbiAgICAgICAgaWYgKCFhYmlsaXR5LmFpciAmJiB1bml0LmZseWVyKSBjb250aW51ZTtcbiAgICAgICAgaWYgKCFhYmlsaXR5LnN0cnVjdHVyZSAmJiB1bml0LnN0cnVjdHVyZSkgY29udGludWU7XG4gICAgICAgIGNvbnN0IGhpdHMgPSBNYXRoLm1heCgxLCBNYXRoLmNlaWwoKHVuaXQuaHAgKyB1bml0LnNoaWVsZHMpIC8gZGFtYWdlKSk7XG4gICAgICAgIGNvbnN0IGJ1Y2tldCA9IGFiaWxpdHkuc3BhbW1hYmxlID8gTWF0aC5taW4oaGl0cywgNCkgLSAxIDogaGl0cyA8PSAxID8gMCA6IDE7XG4gICAgICAgIGJ1Y2tldHNbdW5pdC5yYWNlXSA/Pz0gQXJyYXkuZnJvbSh7IGxlbmd0aDogYWJpbGl0eS5zcGFtbWFibGUgPyA0IDogMiB9LCAoKSA9PiBbXSk7XG4gICAgICAgIGJ1Y2tldHNbdW5pdC5yYWNlXVtidWNrZXRdLnB1c2godW5pdCk7XG4gICAgfVxuXG4gICAgcmV0dXJuIGJ1Y2tldHM7XG59XG4iLAogICAgImltcG9ydCB7XG4gICAgY2FsY3VsYXRlRGFtYWdlLFxuICAgIGNsYXNzaWZ5VW5pdHMsXG59IGZyb20gJy4vbWFzdGVyeWJyZWFrcG9pbnRzLWNvcmUnO1xuXG5kZWNsYXJlIGdsb2JhbCB7XG4gICAgaW50ZXJmYWNlIFdpbmRvdyB7XG4gICAgICAgIG1hc3RlcnlCcmVha3BvaW50czoge1xuICAgICAgICAgICAgY2FsY3VsYXRlRGFtYWdlOiB0eXBlb2YgY2FsY3VsYXRlRGFtYWdlO1xuICAgICAgICAgICAgY2xhc3NpZnlVbml0czogdHlwZW9mIGNsYXNzaWZ5VW5pdHM7XG4gICAgICAgIH07XG4gICAgfVxufVxuXG53aW5kb3cubWFzdGVyeUJyZWFrcG9pbnRzID0geyBjYWxjdWxhdGVEYW1hZ2UsIGNsYXNzaWZ5VW5pdHMgfTtcbiIKICBdLAogICJtYXBwaW5ncyI6ICI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7RUF1QkEsSUFBTSxRQUFRLENBQUMsV0FBVyxVQUFVLFFBQVEsWUFBWSxTQUFTO0FBQUEsRUFFMUQsU0FBUyxlQUFlLENBQUMsU0FBNEIsUUFBd0I7QUFBQSxJQUNoRixNQUFNLFlBQVksUUFBUSxhQUFhLFFBQVEsaUJBQWlCLFNBQVMsUUFBUTtBQUFBLElBQ2pGLE9BQU8sV0FBVyxNQUFNLFdBQVcsS0FBSyxLQUFLLE1BQU0sU0FBUyxJQUFJLEtBQUssTUFBTSxTQUFTO0FBQUE7QUFBQSxFQUdqRixTQUFTLGFBQWEsQ0FDekIsT0FDQSxTQUNBLFFBQ0EsT0FDaUI7QUFBQSxJQUNqQixNQUFNLFVBQTZCLE9BQU8sWUFDdEMsTUFBTSxJQUFJLFVBQVEsQ0FBQyxNQUFNLE1BQU0sS0FBSyxFQUFFLFFBQVEsUUFBUSxZQUFZLElBQUksRUFBRSxHQUFHLE1BQU0sQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUN6RjtBQUFBLElBQ0EsSUFBSSxTQUFTLGdCQUFnQixTQUFTLE1BQU07QUFBQSxJQUM1QyxJQUFJLFFBQVE7QUFBQSxNQUFpQixVQUFVO0FBQUEsSUFFdkMsV0FBVyxRQUFRLE9BQU87QUFBQSxNQUN0QixJQUFJLENBQUMsUUFBUSxPQUFPLEtBQUs7QUFBQSxRQUFPO0FBQUEsTUFDaEMsSUFBSSxDQUFDLFFBQVEsYUFBYSxLQUFLO0FBQUEsUUFBVztBQUFBLE1BQzFDLE1BQU0sT0FBTyxLQUFLLElBQUksR0FBRyxLQUFLLE1BQU0sS0FBSyxLQUFLLEtBQUssV0FBVyxNQUFNLENBQUM7QUFBQSxNQUNyRSxNQUFNLFNBQVMsUUFBUSxZQUFZLEtBQUssSUFBSSxNQUFNLENBQUMsSUFBSSxJQUFJLFFBQVEsSUFBSSxJQUFJO0FBQUEsTUFDM0UsUUFBUSxLQUFLLFVBQVUsTUFBTSxLQUFLLEVBQUUsUUFBUSxRQUFRLFlBQVksSUFBSSxFQUFFLEdBQUcsTUFBTSxDQUFDLENBQUM7QUFBQSxNQUNqRixRQUFRLEtBQUssTUFBTSxRQUFRLEtBQUssSUFBSTtBQUFBLElBQ3hDO0FBQUEsSUFFQSxPQUFPO0FBQUE7OztFQ3JDWCxPQUFPLHFCQUFxQixFQUFFLGlCQUFpQixjQUFjOyIsCiAgImRlYnVnSWQiOiAiNjExNzhBOTJBQjZBRUE4QzY0NzU2RTIxNjQ3NTZFMjEiLAogICJuYW1lcyI6IFtdCn0=
